<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class PostsController extends Controller
{
    //
    public function index()
    {
        $posts = DB::table('posts')->get();
        return view('posts.index', ['posts' => $posts]);
    }

    public function create(Request $request)
    {
        $post = $request->input('newPost');
        DB::table('posts')->insert([
            'posts' => $post,
            'user_id' => Auth::user()->id,
            'created_at' => now(),
        ]);

        return redirect('/top');
    }
}
