<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PostCreateRequest;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(User $user)
    {

        $posts = DB::table('posts')->where('user_id', Auth::id()) //Entrega
            ->orderBy('created_at', 'desc')->limit(10)->get();

        /* dd($posts); */

        return view('/home', compact('posts')); //Deja pasar la variable posts.



        /* $posts = DB::table('posts')
            ->orderBy('created_at', 'desc')->limit(2)
            ->get();

        dd($posts);
        $users = User::all();
        return view('/home', compact('posts', 'users')); */
    }







    /* $posts = DB::table('posts')
            ->orderBy('created_at', 'desc')
            ->get();

        dd($posts);
        $users = User::all();
        return view('/home', compact('posts', 'users')); */
}
