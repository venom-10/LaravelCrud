<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userauth;

class userAuthController extends Controller
{
    // Show User registration Form (get)
    public function registerForm()
    {
        return view('pages.register');
    }
    // Handle User Registration request(post)
    public function handleRegisterReq(Request $req)
    {
        $password = $req->password;
        $formFields = $req->validate([
            'name' => 'required',
            'email' => 'required|unique:userauths',
            'password' => [
                'required', 'min:6',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*])[A-Za-z\d!@#$%^&*]+$/'
            ],
            'cpassword' => ['required', function ($attribute, $value, $fail) use ($password) {
                if ($value !== $password) {
                    $fail('Password and Confirm Password should match');
                }
            }],
        ]);
        $formFields['password'] = bcrypt($formFields['password']);
        userauth::create($formFields);
        return redirect('/loginForm');
    }

    // Show User Login Form (get)
    public function loginForm()
    {
        return view('pages.login');
    }

    // Handle User Login Request(post)
    public function handleLoginReq(Request $req)
    {
        // dd($req->email, $req->password);
        $formFields = $req->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        if(auth()->attempt($formFields)){
            $req->session()->regenerate();
            return redirect('/');
        }
        
    }

    // Handle User Logout Request(get)
    public function handleLogout(Request $req){
        auth()->logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();
        return redirect('/')->with('message', 'You are log out');
    }
}
