<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(Request $request)
    {
        $user = auth()->user();
        $alerts = Post::where('type', 'alert')->get();//temporary TODO: alert make another table
        $user_role = $user['role'];
        $allposts = Post::all(); //Get all posts
        $resource_for_home = array(
            'user_role'=> $user_role,
            'posts'=> $allposts,
            'alerts' => $alerts
        );
        return view('home', $resource_for_home);
    }
}
