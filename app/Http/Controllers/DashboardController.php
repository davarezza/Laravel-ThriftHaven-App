<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $image = null;
    
        if (Auth::check()) {
            $user = Auth::user();
            $image = $user->image;
        }
    
        return view('dashboard.index', [
            'image' => $image,
        ]);
    }
}
