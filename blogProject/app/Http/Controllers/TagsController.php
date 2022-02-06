<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagsController extends Controller 
{
    
    public function index() 
    {
        return view('tags.allTags');
    }

    public function storeTags(Request $request) 
    {
        $request->validate([
            'tag_name' => 'required',
        ]);


        $tag = new Tag();
        $tag->tag_name = $request->tag_name;
        $tag->save();
        return redirect()->back()->with('success', 'Successful');
    }

    public function getAllPostByTag($id) 
    {
        $tag = Tag::find($id);
        $all_posts = $tag->post;
        return view('tags.allPosts', compact('all_posts'));
    }

    public function preEditTags()
    {
        $all_tags = Tag::all();
        return view('tags.preEdit', compact('all_tags'));
    }
    
    public function editTags($id)
    {
        $single_tag = Tag::find($id);
        return view('tags.edit', compact('single_tag'));
    }
    
    public function updateTags(Request $request, $id)
    {
        Tag::find($id)->update([
            'tag_name' => $request->tag_name,
        ]);

        $all_tags = Tag::all();
        return view('tags.preEdit', compact('all_tags'));
    }

    public function deleteTags(Request $request, $id) 
    {
        Tag::find($id)->delete();
        return Redirect()->back();
    }


}
