<?php

namespace App\Http\Controllers;

use App\Classes;
use App\User;
use App\Record;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $classes = Classes::where('teacher_id', Auth::user()->id)->with('records.user')->get();
        
        return view('dashboard', ['classes' => $classes]);
    }
}
