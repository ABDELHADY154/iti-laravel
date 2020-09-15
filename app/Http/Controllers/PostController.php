<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $posts = Post::paginate($request->query('limit', 5));
        return view('layouts.Posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.Posts.create', ['users' => User::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        // $request->validate([
        //     'title' => ['required', 'string'],
        //     'slug' => ['required', 'string'],
        //     'desc' => ['required', 'string'],
        //     'body' => ['required', 'string'],
        //     'enabled' => ['required', 'boolean'],
        //     'user_id' => ['required', 'exists:users,id'],
        //     'published_at' => ['required']
        // ]);

        // dd($request->all());

        $data = $request->except('user_id');
        Auth::user()->posts()->save(new Post($data));
        // $post = Post::create();
        return redirect(route('post.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('layouts.Posts.show', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('layouts.Posts.edit', ['post' => $post, 'users' => User::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, Post $post)
    {
        // $request->validate([
        //     'title' => ['required', 'string'],
        //     'slug' => ['required', 'string'],
        //     'desc' => ['required', 'string'],
        //     'body' => ['required', 'string'],
        //     'enabled' => ['required', 'boolean'],
        //     'user_id' => ['required', 'exists:users,id'],
        //     'published_at' => ['required']
        // ]);
        $post->update($request->all());
        return redirect(route('post.show', $post));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect(route('post.index'));
    }
}
