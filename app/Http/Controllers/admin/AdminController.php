<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Spatie\Activitylog\Models\Activity;

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

    public function customers()
    {
        $image = null;
    
        if (Auth::check()) {
            $user = Auth::user();
            $image = $user->image;
        }

        $customers = User::where('role', 'customer')->get();
    
        return view('admin.customers', [
            'image' => $image,
            'customers' => $customers,
        ]);
    }

    public function sellers()
    {
        $image = null;
    
        if (Auth::check()) {
            $user = Auth::user();
            $image = $user->image;
        }

        $sellers = User::where('role', 'seller')->get();
    
        return view('admin.sellers', [
            'image' => $image,
            'sellers' => $sellers
        ]);
    }

    public function activity()
    {
        $activities = Activity::all();

        if (Auth::check()) {
            $user = Auth::user();
            $image = $user->image;
        }

        return view('page.activity', [
            'activities' => $activities,
            'image' => $image,
        ]);
    }

    public function deleteAll()
    {
        Activity::truncate();

        return redirect()->route('activity')->with('success', 'All activity has been deleted.');
    }
}
