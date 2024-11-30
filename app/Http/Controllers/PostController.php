<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Agent;
use App\Models\Side;
use App\Models\Map;
use Illuminate\Support\Facades\Auth;
use Cloudinary;

class PostController extends Controller
{
    public function index(Agent $agent)
    {
        return view ('posts.index')->with(['agents' => $agent->get()]);
    }

    public function show(Post $post, Agent $agent, Map $map, Side $side)
    {   
        $post = Post::where('agent_id', $agent->id);
        return view('posts.show')->with(['posts' => $post->get(), 'sides' => $side->get(), 'maps' => $map->get()]);
    }

    public function create(Agent $agent, Side $side, Map $map)
    {
        return view('posts.create')->with(['agents' => $agent->get(), 'sides' => $side->get(), 'maps' => $map->get()]);
    }

    public function store(Request $request, Post $post, Agent $agent, Map $map, Side $side)
    {
        //dd($request);
        $image_pass = Cloudinary::upload($request->file('image_pass')->getRealPath())->getSecurePath();
        //dd($image_pass); 

        $user_id = Auth::id();
        $post->user_id = $user_id;
        $input = $request['post'];
        $input += ['image_pass' => $image_pass];
        $post->fill($input)->save();
        //dd($post);
        return redirect('/posts/' . $post->agent->name);
    }
}
