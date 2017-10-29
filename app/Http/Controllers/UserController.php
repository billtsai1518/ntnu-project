<?php

namespace App\Http\Controllers;

use App\Classes;
use App\Record;
use App\User;
use App\SortDetail;
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
        $records = Record::where('user_id', $id)->with('classes', 'sort_details.portfolio')->withCount('sort_details')->get()->reverse();
        return view('user', ['user' => $user, 'records' => $records]);
    }

    public function setting_view()
    {
        return view('setting');
    }
    
    public function setting_store(Request $request)
    {
        Auth::user()->name = $request->name;
        Auth::user()->email = $request->email;
        Auth::user()->student_id = $request->student_id;
        Auth::user()->school = $request->school;
        Auth::user()->save();
        
        return redirect()->action('HomeController@index');
    }
}
