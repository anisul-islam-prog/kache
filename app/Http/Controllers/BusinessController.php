<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class BusinessController extends Controller
{
    public function index(Request $request)
    {
        $user = auth()->user();
        $allposts = Post::where('created_by', $user['email'])->get(); //Get all posts created by user id
        // var_dump($allposts);die;
        $resource_for_dashboard = array(
            'posts' => $allposts,
        );
        return view('dashboard', $resource_for_dashboard);
    }
}
