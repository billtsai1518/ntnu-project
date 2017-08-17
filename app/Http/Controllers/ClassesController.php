<?php

namespace App\Http\Controllers;

use App\Classes;
use App\User;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClassesController extends Controller
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
    public function create()
    {
        return view('createclass');
    }
	
	public function store(Request $request)
	{
		$classes = new Classes;
		$classes->name = $request->name;
		$classes->teacher_id = Auth::user()->id;
		$classes->invite_code = $request->invite_code;
		$classes->save();
		
		return redirect()->action('HomeController@index');
	}

	public function join_class()
	{
		return view('joinclass');
	}
	
	public function join_store(Request $request)
	{
		$user = new User;
		$temp = $request->invite_code;
		$result = DB::table('classes')->select('id')->where('invite_code', '=', $temp)->value('id');
		//$user->class_id = $result;
		//$user->save();
		DB::table('users')->where('id', '=', Auth::user()->id)->update(['class_id' => $result]);
		
		return redirect()->action('HomeController@index');
	}
    
    public function classes_view($id)
    {
        $classes = Classes::findOrFail($id);
        return view('classes', ['classes' => $classes]);
    }
    
    public function classes_store(Request $request, $id)
    {
        $classes = Classes::findOrFail($id);
        $classes->name = $request->name;
        $classes->invite_code = $request->invite_code;
        $classes->save();

        return redirect()->action('HomeController@index');
    }
}
