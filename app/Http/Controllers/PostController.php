<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PostCreateRequest;
use Symfony\Component\Console\Input\Input;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        //$user = User::find(User $user)
        //echo "Hola.".$user->$name;
        /* $posts = Post::where('user_id', $user->id)
            ->orderBy('created_at', 'desc')
            ->get(); */

        $posts = $user->posts() //Entrega
            ->orderBy('created_at', 'desc')
            ->simplePaginate(2);

            /* dd($posts); */

        return view('posts.index', compact('posts', 'user')); //Deja pasar la variable posts.
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostCreateRequest $request)
    {

        $post = new Post();
        $post->fill($request->input());
        $post->user_id = Auth::id(); //Es el código con el que se crea el post
        $post->save();

        /* dd($request->input('content')); */
        return redirect(route('home')); // url('/home') o route('home')
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(PostCreateRequest $request, Post $post)
    {
        //Actualizar
        $post->fill($request->input());
        $post->save();

        return redirect(route('user.posts', $post->user_id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect(route('user.posts', $post->user_id));
    }
}
