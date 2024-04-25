<?php

namespace App\Http\Controllers\seller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SellerController extends Controller
{
    public function index()
    {
        $image = null;
    
        if (Auth::check()) {
            $user = Auth::user();
            $image = $user->image;
        }
    
        return view('seller.index', [
            'image' => $image,
        ]);
    }
}
