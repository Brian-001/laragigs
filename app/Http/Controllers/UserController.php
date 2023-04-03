<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //Show registerForm/ create

    public function create(){

        return view('users.register');
    }

    public function store(Request $request){
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);
        //Hash Passwords
        $formFields['password'] = bcrypt($formFields['password']);

        //Create user
        $user = User::create($formFields);

        //Login 
        auth()->login($user);

        return redirect('/')->with('message', 'user created and logged in');

    }

    //Logout user
    public function logout(Request $request){
        //Removes User's authentication information from user session
        auth()->logout();
        //
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out');

    }

    //Show user Login Form
    public function login(){
        return view('users.login');
    }

    //Authenticate User
    public function authenticate(Request $request){
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if (auth()->attempt($formFields)) {

            $request->session()->regenerate();

            return redirect('/')->with('message', 'You are now logged in');
        } 

        // You don't want the person to know if the email exists or the password is incorrect
        return back()->withErrors(['email'=>'Invalid Credentials'])->onlyInput('email');
    }
}
