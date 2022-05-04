<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index(){
        return view('form');
    }

    public function register(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
            // 'cpassword' => 'required|same:password'
            // remove confirmed from password when use same properti in cpassword
        ]);
        echo "<pre>";
        print_r($request->all());
        
    }
}
