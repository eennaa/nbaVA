<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Http\Requests\RegisterUsers;


class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
        $this->middleware('auth', ['only' => 'logout']);
    }
    
   public function loginview()
   {   
       return view('auth.loginview');
   }
    
   public function login()
   {
    $this-> validate(request(), ['email'=> 'required|email', 
                                    'password'=> 'required|min:6']);

        $credentials = request(['email', 'password']);
        if (!auth()->attempt($credentials)){   
        
            return redirect()->back()->withErrors([
                'message'=> 'Bad credentials. Please try again'
            ]); 
        }
        
        return redirect('/');
        
   }
        
   
    
   public function logout()
   {   
       auth()->logout();
       return redirect('/login');
   }
}
