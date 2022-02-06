<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller 
{
    
    public function showAllComments() 
    {
        $all_posts = Post::all();
        return view('posts.allComments', compact('all_posts'));
    }

    public function storeComments(Request $request, $id) 
    {
        /* $user = User::find(Auth::id()); 
        $post = Post::find($id);  */
        $request->validate([
            'username' => 'required',
            'comment' => 'required',
        ]);
        
        $comment = new Comment();
        $comment->username = $request->username;
        $comment->comment = $request->comment;

        if (Auth::check()) 
        {
            $comment->user_id = Auth::id();
        } 
        else 
        {
            $comment->user_id = 0; //0 means guest user
        }
        
        $comment->post_id = $id;
        /* $user->comments()->save($comment);
        $post->comments()->save($comment); */
        $comment->save();
        

        return redirect('/posts/'.$id);
    }

    public function editComment($id)
    {
        $single_comment = Comment::find($id);
        return view('posts.commentEdit', compact('single_comment'));
    }
    
    public function updateComment(Request $request, $id)
    {
        Comment::find($id)->update([
            'comment' => $request->comment,
        ]);
        
        $post_id = Comment::find($id)->post_id;
        $single_post = Post::find($post_id);
        return redirect()->route('singlePage', ['id' => $post_id])->withInput();


    }

    public function deleteComments(Request $request, $id) 
    {
        Comment::find($id)->delete();
        return Redirect()->back();
    }
}
