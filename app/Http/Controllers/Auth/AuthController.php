<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\SignInUserRequest;
use App\Http\Requests\SignUpUserRequest;
use App\Models\User;

class AuthController extends Controller
{
    public function signup(SignUpUserRequest $request)
    {
        // Validate user request
        $request->validated($request->only(['fullName', 'username', 'email', 'password']));

        // Store user in db
        $user = User::create([
            "name" => $request->fullName,
            "username" => $request->username,
            "email" => $request->email,
            "password" => $request->password,
        ]);

        // Login
        auth()->login($user);
        sleep(1);
        return redirect('/');
    }
    public function signin(SignInUserRequest $request)
    {
        // Validate user request
        $request->validated($request->only(["email", "password"]));

        if (!auth()->attempt($request->only(['email', 'password']))) {
            return back()->withErrors([
                "password" => "Wrong credentials"
            ]);
        }
        $request->session()->regenerate();
        sleep(1);
        return redirect('/');
    }
    public function logout()
    {
        auth()->logout();
        sleep(1);
        return redirect('/');
    }
}
