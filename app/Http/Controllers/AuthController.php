<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function login()
    {
        return view('auth.login');
    }


    public function register()
    {
        return view('auth.register');
    }
    public function submitregister(RegisterRequest $request)
    {
        $data = $request->validated();
        $data['password'] = Hash::make($data['password']);
        $user = User::create($data);

        return redirect()->route('login')->with("success", "Registered successfully, please login");
    }

public function submitLogin(LoginRequest $request)
{
    $data = $request->validated();

    $rememberToken = $request->boolean('rememberToken');
    if (Auth::attempt($data, $rememberToken)) {

        $request->session()->regenerate();

        return match (Auth::user()->role) {
            'admin' => redirect()->route('dashboard.admin'),
            'instructor' => redirect()->route('dashboard.instructor'),
            default => redirect()->route('dashboard.student'),
        };
    }

    return back()->withErrors(['email' => 'Invalid credentials']);
}
    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }
}
