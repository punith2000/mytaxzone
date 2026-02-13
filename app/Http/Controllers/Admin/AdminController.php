<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;
use App\Models\Visitor;
use App\Models\Faq;
use App\Models\PageView;
use App\Models\Consult;

class AdminController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        // Validate form input
        $credentials = $request->validate([
            'email'    => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Attempt login
        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
        
            return redirect()->intended('/admin/dashboard');
        }        

        // If login fails
        return back()->withErrors([
            'email' => 'Invalid email or password.',
        ])->onlyInput('email');
    }

    public function dashboard()
    {
        $totalContacts = Contact::count();
        $faqCount = Faq::count();
        $visitorCount = Visitor::count();
        $pageCount = PageView::count();
        $consultCount = Consult::count();
        return view('admin.dashboard', compact('totalContacts', 'faqCount', 'visitorCount', 'pageCount', 'consultCount'));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login');
    }
    
}