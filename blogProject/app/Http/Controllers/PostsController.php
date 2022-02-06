<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Like;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File; 


class PostsController extends Controller 
{

    public function home() 
    {
        $all_posts = Post::paginate(2);
        $all_tags = Tag::all();
        $all_categories = Category::all();
        return view('welcome', compact('all_posts', 'all_tags', 'all_categories'));
    }
    
    public function index() 
    {
        $all_posts = Post::paginate(8);
        $all_categories = Category::all();
        return view('posts.allPosts', compact('all_posts', 'all_categories'));
    }

    public function singlePage($id) 
    {
        $single_post = Post::find($id);
        return view('posts.singleView', compact('single_post'));
    }

    
    public function create() 
    {
        $all_tags = Tag::all();
        $all_categories = Category::all();
        return view('posts.create', compact('all_tags', 'all_categories'));
    }

    public function store(Request $request) 
    {

        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required',
            'tags' => 'required',
            'categories' => 'required',
        ]);

        $newImageName = time() . '-' . $request->title . '.' . 
                        $request->image->extension();

        $request->image->move(public_path('images'), $newImageName);
        
        $categoryIds = array_map('intval', $request->categories);
        $tagIds = array_map('intval', $request->tags);

        $user = User::find(Auth::id()); 
        $post = new Post();
        
        $post->title = $request->title;
        $post->content = $request->content;
        $post->image = $newImageName;
        $user->post()->save($post);
        $post->category()->attach($categoryIds);
        $post->tag()->attach($tagIds);
        
        return redirect()->back()->with('success', 'Successful');
    }  

    public function searchDataBase(Request $request) 
    {
        $title = $request->get('title');
        $all_posts = Post::where('title', 'LIKE', '%'. $title . '%')->paginate(1);
        if (count($all_posts) > 0) 
        {
            return view('tags.allPosts', compact('all_posts'));
        } else 
        {
            return Redirect()->back();
        }
    }

    public function preEdit() 
    {
        //$all_posts = Post::all();
        if (Auth::user()->name=="Admin")
        {
            $all_posts = Post::all();
        }
        else
        {
            $all_posts = Post::where('user_id', '=', Auth::user()->id)->get();
        }
        return view('posts.preEdit', compact('all_posts'));
    }

    public function edit($id) 
    {
        $single_post = Post::find($id);
        $all_posts = Post::all();
        return view('posts.edit', compact('single_post', 'all_posts'));
    }


    public function update(Request $request, $id) 
    {
        if($request->hasFile('image')) 
        {
            $newImageName = time() . '-' . $request->title . '.' . 
            $request->image->extension();
            $request->image->move(public_path('images'), $newImageName);
            File::delete('images/'.Post::find($id)->image);

            Post::find($id)->update([
                'title' => $request->title,
                'content' => $request->content,
                'image' => $newImageName,
            ]);
        } 
        else 
        {
            Post::find($id)->update([
                'title' => $request->title,
                'content' => $request->content,
            ]);
        }

        $all_posts = Post::all();

        return redirect()->route('postsPreEdit');
    }

    public function delete(Request $request, $id) 
    {
        Post::find($id)->delete();
        return redirect()->route('allPosts');
    }

    public function like($id)
    {
        $post_id = $id;
        $user_id = Auth::user()->id;
        $like = new Like();
        $like->post_id = (int)$post_id;
        $like->user_id = (int)$user_id;
        $like->liked=1;
        $like->save();
        return redirect('posts/'.$id);
    }

    public function dislike($id)
    {
        $post_id = $id;
        $user_id = Auth::user()->id;
        $like = new Like();
        $like->post_id = (int)$post_id;
        $like->user_id = (int)$user_id;
        $like->liked=0;
        $like->save();
        return redirect('posts/'.$id);
    }

    public function autoSearch(Request $request)
    {
        $data = Post::select("title")
                    ->where("title","LIKE","%{$request->term}%")
                    ->pluck('title');
        return response()->json($data);
    }

}
