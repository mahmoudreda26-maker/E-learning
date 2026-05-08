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

    if (Auth::attempt($data, $request->remember)) {

        $request->session()->regenerate();

        $user = Auth::user();
        if ($user->role == 'admin') {
            return redirect()->route('dashboard.admin');
        }
        if ($user->role == 'instructor') {
            return redirect()->route('dashboard.instructor');
        }
        return redirect()->route('dashboard.student');
    }

    return back()->withErrors([
        'email' => 'Invalid credentials'
    ])->withInput();
}
    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }
}
