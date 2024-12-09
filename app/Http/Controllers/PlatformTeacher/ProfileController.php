<?php

namespace App\Http\Controllers\PlatformTeacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Teacher;

class ProfileController extends Controller
{
    public function index() {
        $teacher = Teacher::find(Auth::id());
        return view('platform-teacher.profile.index', compact('teacher'));
    }

    public function edit() {
        $teacher = Teacher::find(Auth::id());
        return view('platform-teacher.profile.update', compact('teacher'));
    }

    public function update(Request $request) {
        $teacher = Teacher::find(Auth::id());

        // Check the new password confirmation match
        if ($request->has('new_password') && $request->input('new_password') !== $request->input('new_password_confirmation')) {
            return back()->withErrors(['new_password' => 'The new password and confirmation do not match.']);
        }

        if ($request->has('new_password')) {
            // Check if the current password is correct
            if (!Hash::check($request->input('current_password'), $teacher->password)) {
                return back()->withErrors(['current_password' => 'The current password is incorrect.']);
            }
        
            // Update the password
            $teacher->password = Hash::make($request->input('new_password'));
        }

        // Update the others...
        $teacher->email = $request->input('email');
        $teacher->phone = $request->input('phone');
        $teacher->gender = $request->input('gender');
        $teacher->birthday = $request->input('birthday');
        
        $teacher->save();

        return redirect()->route('profile.index')->with('success', true);
    }
}
