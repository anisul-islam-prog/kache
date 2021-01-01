<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class BusinessController extends Controller
{
    public function index(Request $request)
    {
        $user = auth()->user();
        print_r($user['id']);
        die;
        $alerts = Post::where('type', 'alert')->get();
        $user_role = $user['role'];
        $allposts = Post::where('created_by', $user['id']); //Get all posts created by user id
        $resource_for_dashboard = array(
            'user_role' => $user_role,
            'posts' => $allposts,
            'alerts' => $alerts
        );
        return view('dashboard', $resource_for_dashboard);
    }
}
