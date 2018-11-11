<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\User;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function profile()
    {
        //$user = Auth::user();
        //$posts = $user -> posts;
        $user = User::find(20);
        $posts = $user->posts;
        //dd($posts);

        //dd($users);
        return view('profile', ['posts'=>$posts]);
    }
}
