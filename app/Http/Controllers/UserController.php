<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Http\Requests\RegisterUsers;

class UserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(RegisterUsers $request)
    {
        
        $validated = $request->validated();
       
        
                
        
        $user = \App\User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))
        ]);
        
        auth()->login($user);

        return redirect('/');
    }
}
