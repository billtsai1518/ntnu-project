<?php

namespace App\Http\Controllers;

use App\User;
use App\Classes;
use App\Record;
use App\Action;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class AuthenticateController extends Controller
{
    public function login(Request $request)
    {
        // grab credentials from the request
        $credentials = $request->only('email', 'password');

        try {
            // attempt to verify the credentials and create a token for the user
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'invalid_credentials'], 401);
            }
        } catch (JWTException $e) {
            // something went wrong whilst attempting to encode the token
            return response()->json(['error' => 'could_not_create_token'], 500);
        }

        // all good so add a new Record
        $record = new Record;
        $record->class_id = $request->class_id;
        $record->user_id = User::where('email', $request->email)->first()->id;
        $record->save();
        
        // and then return the token
        return response()->json(compact('token'));
    }
    
    public function register(Request $request)
    {
        $email_exist_or_not = User::where('email', $request->email)->first();
        if (is_null($email_exist_or_not))
        {
            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->student_id = $request->student_id;
            $user->school = $request->school;
            $user->save();
            
            return response()->json(['register' => 'success']);
        }
        else
        {
            return response()->json(['register' => 'already_member']);
        }
    }
    
    public function student_info()
    {
        $record = Record::where('user_id', Auth::user()->id)->get()->last();
        $classes = Classes::where('id', $record->class_id)->first();
        $teacher = User::where('id', $classes->teacher_id)->first();
        return response()->json(['class_name'=> $classes->name, 'student_name' => Auth::user()->name, 'student_id' => Auth::user()->student_id, 'school' => Auth::user()->school, 'teacher_name' => $teacher->name, 'record_id' => $record->id]);
    }
    
    public function download()
    {
        return response()->json(Action::all());
    }
    
    public function action_event()
    {
        //
    }


}
