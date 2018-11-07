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
        //$user=User::find(3);
        //$user->name='abc';
        //$user->delete();
        $users = User::all();
        //$user->name='at up';
        //$user->delete();
        //$users = User::where('id', 1)
          //  ->orderBy('name', 'desc')
           // ->take(10)
            //->get();
        //dd($users->count());
        //dd($users);
        return view('profile', ['users'=>$users]);
    }
}
