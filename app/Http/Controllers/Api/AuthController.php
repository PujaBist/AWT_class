<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    // this function  is for login
    public function login()
    {
        return"test login";
    }


    public function register(Request $request)
    {
        $request->validate([
            'name' =>'required|min:1|max:255',
            'email' => 'required|email',
            'password'=>'required',
        ]);
        $existingUser=User :: where('email',$request ->email)->exists();
        if($existingUser){
            throw ValidationException::withMessages([
                'email' => 'Email already in use'
            ]);
        }
        # create accept array
       User::create($request->all());   
     #  response() is aglobal function 
       return response () ->json ([
        'message' => 'User created successfully!'
       ]) ; #return $request->all();  #-> is used in php
    }



}
