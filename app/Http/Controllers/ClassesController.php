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
		$classes->save();
		
		return redirect()->action('HomeController@index');
	}

    public function classes_view($id)
    {
        $classes = Classes::findOrFail($id);
        return view('classes', ['classes' => $classes]);
    }
    
    public function classes_store(Request $request)
    {
        $classes = Classes::findOrFail($request->class_id);
        $classes->name = $request->name;
        $classes->save();

        return redirect()->action('HomeController@index');
    }
}
