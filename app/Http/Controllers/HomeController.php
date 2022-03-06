<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User;

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
        /* $posts = $user->posts() //Entrega
            ->orderBy('created_at', 'desc')
            ->simplePaginate(2);

        return view('posts.index', compact('posts', 'user')); //Deja pasar la variable posts. */

        $posts = DB::table('posts')
            ->orderBy('created_at', 'desc')
            ->simplePaginate(3);

        /* dd($posts); */


        $users = User::all();
        /* $posts = $user->posts() //Entrega
            ->orderBy('created_at', 'desc')
            ->simplePaginate(3); */

        /* dd($users); */

        return view('/home', compact('posts', 'users'));
    }
}
