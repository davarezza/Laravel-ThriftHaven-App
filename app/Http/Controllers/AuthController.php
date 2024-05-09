<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function registerPage()
    {
        return view('guest.register');
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'password' => 'required|min:3|max:255'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        activity()
        ->causedBy(User::firstOrCreate(['email' => $validatedData['email']]))
        ->log('Registered a new account');

        return redirect('login')->with('success', 'Registration successful. You can now log in.');
    }

    public function loginPage()
    {
        return view('guest.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            activity()->causedBy($user)->log('Logged in');

            return redirect('/')->with('success', 'Login Success.');
        }

        activity()->log('Failed login attempt for email: ' . $request->email);

        return back()->with('loginError', 'Login Failed');
    }

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();

        return redirect('/');
    }
}
