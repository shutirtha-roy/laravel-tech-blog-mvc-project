<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function allUsers()
    {
        
        if (Auth::user()->name=="Admin")
        {
            $all_users = User::all();
        }
        else
        {
            $all_users = User::where('id', '=', Auth::user()->id)->get();
        }
        return view('users.allUsers', compact('all_users'));
    }

    public function individualUserPost()
    {
        $all_posts = Post::where('user_id', '=', Auth::user()->id)->paginate(8);
        $all_categories = Category::all();
        return view('posts.allPosts', compact('all_posts', 'all_categories'));
    }

    public function changePassword()
    {
        $single_user = User::find(Auth::user()->id);
        return view('users.passwordEdit', compact('single_user'));
    }

    public function updatechangedPassword(Request $request, $id)
    {
        $request->validate([
            'password_change' => 'required',
            'password_confirm' => 'required',
        ]);

        if ($request->password_change == $request->password_confirm) 
        {
            User::find($id)->update([
                'password' => Hash::make($request->password_change),
            ]);
        }
        else
        {
            return "Enter again";
        }

        $single_user = User::find($id);
        return redirect()->route('panel');
    }

    public function editUsers($id)
    {
        $single_user = User::find($id);
        return view('users.edit', compact('single_user'));
    }

    public function updateUsers(Request $request, $id)
    {
        User::find($id)->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return redirect()->route('allUsers');
    }

    public function deleteUsers(Request $request, $id)
    {
        User::find($id)->delete();
        return Redirect()->back();
    }
}
