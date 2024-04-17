<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $image = null;
    
        if (Auth::check()) {
            $user = Auth::user();
            $image = $user->image;
        }
    
        return view('admin.index', [
            'image' => $image,
        ]);
    }
}
