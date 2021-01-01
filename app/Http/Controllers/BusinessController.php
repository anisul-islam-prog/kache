<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class BusinessController extends Controller
{
    public function index(Request $request)
    {
        $user = auth()->user();
        $alerts = Post::where('type', 'alert')->get();
        $user_role = $user['role'];
        $allposts = Post::all(); //Get all posts
        $resource_for_dashboard= array(
            'user_role'=> $user_role,
            'posts'=> $allposts,
            'alerts' => $alerts
        );
        return view('dashboard', $resource_for_dashboard);
    }
}
