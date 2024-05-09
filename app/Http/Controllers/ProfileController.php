<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

            activity()->causedBy($user)->log('Updated profile picture');
    
            return redirect()->route('profile')->with('success', 'Profile picture updated successfully');
        }
    }
    
    public function update(Request $request)
    {
        $user = User::find(Auth::id());

        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        activity()->causedBy($user)->log("Updated profile name or email");
    
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
    
        if ($request->filled('password')) {
            $request->validate([
                'password' => 'required|min:3',
            ]);
    
            // Periksa apakah password lama benar
            if (Hash::check($request->password, $user->password)) {
                // Validasi password baru jika diisi
                if ($request->filled('password_new')) {
                    $request->validate([
                        'password_new' => 'required|min:3|different:password',
                    ]);
    
                    // Hash dan simpan password baru
                    $user->password = bcrypt($request->password_new);
                }
            } else {
                return redirect()->back()->withErrors(['password' => 'The provided password does not match your current password']);
            }
        }
    
        // Simpan perubahan
        $user->save();
    
        return redirect()->route('profile')->with('success', 'Profile updated successfully');
    }
}
