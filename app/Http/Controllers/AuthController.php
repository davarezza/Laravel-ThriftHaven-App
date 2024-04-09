<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function registerPage()
    {
        return view('guest.register');
    }

    public function loginPage()
    {
        return view('guest.login');
    }
}
