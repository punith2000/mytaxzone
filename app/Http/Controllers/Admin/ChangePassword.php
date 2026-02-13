<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ChangePassword extends Controller
{
    public function showForm()
    {
        return view('admin.change_password');
    }

    // Handle the form submission and update the password
    public function update(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);

        $admin = Auth::user();

        if (! $admin) {
            // Not authenticated — redirect to admin login
            return redirect()->route('admin.login')->with('error', 'Please login first.');
        }

        if (! Hash::check($request->current_password, $admin->password)) {
            return back()->with('error', 'Current password does not match.');
        }

        $admin->password = Hash::make($request->new_password);
        $admin->save();

        return back()->with('success', 'Password changed successfully.');
    }
}