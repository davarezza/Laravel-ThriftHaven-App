<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function profile()
    {
        $user = Auth::user();
        if (!$user) {
            return redirect()->route('login');
        }

        // $user_role = $user->role;
        return view('page.profile', [
            'menu_active' => 'profile',
            'email' => $user['email'],
            'name' => $user['name'],
            'image' => $user['image'],
            'password'=> $user['password'],
            // 'user_type' => $user_role->value('name')
            'user_role' => $user['role'],
        ]);
    }
}
