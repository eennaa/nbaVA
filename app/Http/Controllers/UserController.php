<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Http\Requests\RegisterUsers;

use App\Mail\VerifyMail;
use Illuminate\Support\Facades\Mail;

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

        $verifyUser = \App\VerifyUser::create([
            'user_id' => $user->id,
            'token' => str_random(40)
        ]);
        
        // auth()->login($user);
        Mail::to($user)->send(new VerifyMail($user));

        return redirect('/login')->withErrors([
                                    'message' => 'Please check your email account. We sent you verification link']);
    }

    public function verifyUser($token)
    {
        $verifyUser = \App\VerifyUser::where('token', $token)->first();
        if(isset($verifyUser) ){
            $user = $verifyUser->user;
            if(!$user->is_verified) {
                $verifyUser->user->is_verified = 1;
                $verifyUser->user->save();
            
            }
        }else{
            return redirect('/login')->with('warning', "Sorry your email cannot be identified.");
        }
 
        return redirect('/login');
    }
}
