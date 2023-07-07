<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user_auth;

class userAuth extends Controller
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
            'email' => 'required|unique:user_auth',
            'password' => [
                'required', 'min:8',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/'
            ],
            'cpassword' => ['required', function ($attribute, $value, $fail) use ($password) {
                if ($value !== $password) {
                    $fail('Password and Confirm Password should match');
                }
            }],
        ]);
        $formFields['password'] = bcrypt($formFields['password']);
        user_auth::create($formFields);
    }

    // Show User Login Form (get)
    public function loginForm()
    {
        return view('pages.login');
    }

    // Handle User Login Request(post)
    public function handleLoginReq(Request $req)
    {
        dd($req);
    }
}
