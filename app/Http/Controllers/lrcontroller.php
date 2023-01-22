<?php

namespace App\Http\Controllers;

use App\Models\students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class lrcontroller extends Controller
{
    //
    public function index(){
        return view('signup');
    }
    public function create(Request $request){
        $insert=students::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=> Hash::make($request->password),
        'token'=>Hash::make(123)
        ]);
        if($insert){
            return redirect()->back();
        }

    }
    public function indo(){
        return view('login');
    }

    
    public function login(Request $request){
        $validate=request()->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        if($validate){
            $email=$request->email ;
            $password=$request->password ;
            $students=students::where('email','=',$email)->first();
            if (Hash::check($password, $students->password)) {
                   return redirect()->to('/');

            }
            else{
            return redirect()->to('login');

            }

    }
}}