<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //
   public function login(Request $request)
    {
        // Validate input
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Find the admin by username
        $admin = Admin::where('username', $credentials['username'])->first();

            if ($admin && Hash::check($credentials['password'], $admin->password)) {
        // Password matches, login successful
        $request->session()->put('admin_id', $admin->id);

        return redirect()->route('banners.index')->with('success', 'Logged in successfully!');
    }


        // Login failed
        return back()->withErrors([
            'username' => 'Invalid username or password.',
        ]);
    }
    public function dashboard()
    {
             return redirect()->route('banners.index');
    }
    public function logout(Request $request)
    {
        // Log out using Auth facade
        Auth::logout();

        // Remove the admin_id from session
        $request->session()->forget('admin_id');

        // Or you can flush the whole session if nothing else is needed
        // $request->session()->flush();

        // Regenerate session to prevent fixation
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }

}
