<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class CategoriesController extends Controller 
{
    
    public function index() 
    {
        return view('categories.allCategories');
    }

    public function storeCategories(Request $request) 
    {
        $request->validate([
            'category_type' => 'required',
        ]);


        $tag = new Category();
        $tag->category_type = $request->category_type;
        $tag->save();
        return redirect()->back()->with('success', 'Successful');
    }

    public function getAllPostByCategories($id) 
    {
        $category = Category::find($id);
        $all_posts = $category->post;
        return view('categories.allPosts', compact('all_posts'));
    }

    public function preEditCategories()
    {
        $all_categories = Category::all();
        return view('categories.preEdit', compact('all_categories'));
    }
    
    public function editCategories($id)
    {
        $single_category = Category::find($id);
        return view('categories.edit', compact('single_category'));
    }
    
    public function updateCategories(Request $request, $id)
    {
        Category::find($id)->update([
            'category_type' => $request->category_type,
        ]);

        $all_categories = Category::all();
        return view('categories.preEdit', compact('all_categories'));
    }

    public function deleteCategories(Request $request, $id) 
    {
        Category::find($id)->delete();
        return Redirect()->back();
    }
}
