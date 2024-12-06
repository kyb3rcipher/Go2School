<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AuthController extends Controller
{
    public function login() {
        // Check if user is already authenticated
        if (Auth::check()) {
            return redirect('/platform');
        }

        return view('login');
    }

    public function auth(Request $request) {
        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember');

        $admin = Admin::where('email', $credentials['email'])->first();
        if ($admin && Hash::check($credentials['password'], $admin->password)) {
            Auth::login($admin, $remember);
            return redirect()->intended('/platform');
        }

        // Return back with error
        return back()->withErrors(['email' => 'Incorrect credentials.']);
    }

    public function logout(Request $request) {
        Auth::logout();
        
        // Invalidate the session
        $request->session()->invalidate();
        
        // Regenerate CSRF token
        $request->session()->regenerateToken();
        
        return redirect('/login');
    }
}
