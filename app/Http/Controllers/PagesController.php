<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Alert;
use Illuminate\Http\Request;


class PagesController extends Controller
{
    public function home(Request $request)
    {
        // $user = auth()->user();
        $alerts = Alert::orderBy('created_at','desc')->get();//temporary TODO: alert make another table
        $allposts = Post::orderBy('created_at','desc')->get(); //Get all posts by desc
        // var_dump($allposts);die;
        $resource_for_home = array(
            'posts'=> $allposts,
            'alerts' => $alerts
        );
        return view('home', $resource_for_home);
    }
}
