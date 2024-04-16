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
            // 'user_type' => $user_role->value('name')
            'user_role' => $user['role'],
        ]);
    }

    public function changeImage(Request $request)
    {
        $request->validate([
            'image' => 'required|image|max:10000',
        ]);
    
        $user = User::find(Auth::id());
    
        if ($request->hasFile('image')) {
            $oldImagePath = public_path('userProfile/' . $user->image);
            
            if (file_exists($oldImagePath) && is_file($oldImagePath)) {
                unlink($oldImagePath);
            }
    
            $imageName = $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('userProfile/'), $imageName);
    
            // Update nama gambar di database
            $user->image = $imageName;
            $user->save();
    
            return redirect()->route('profile')->with('success', 'Profile picture updated successfully');
        }
    }    
}
