<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Http\Requests\RegisterUsers;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }
    
    public function create()
    {
        return view('auth.register');
    }

    public function store(RegisterUsers $request)
    {
        
        $this-> validate(request(), ['name' => 'bail|required|max:255',
                                    'email' => 'bail|required|email',
                                    'password' => 'bail|required|min:6|confirmed',
                                    'password_confirmation' => 'required']);
                 
        $user = \App\User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))
        ]);
        
        auth()->login($user);

        return redirect('/');
    }
}
