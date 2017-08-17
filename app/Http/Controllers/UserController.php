<?php

namespace App\Http\Controllers;

use App\Classes;
use App\User;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
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
    public function user_view($id)
    {
        $user = User::findOrFail($id);
        $classes = Classes::findOrFail($user->class_id);
        return view('user', ['user' => $user, 'classes' => $classes]);
    }

    public function setting_view()
    {
        return view('setting', ['classes' => Classes::all(), 'users' => User::all()]);
    }
    
    public function setting_store(Request $request)
    {
        Auth::user()->name = $request->name;
        Auth::user()->email = $request->email;
        Auth::user()->save();
        
        return redirect()->action('HomeController@index');
    }
}
