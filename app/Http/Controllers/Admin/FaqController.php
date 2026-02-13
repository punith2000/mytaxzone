<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faq;

class FaqController extends Controller
{
    public function faqs()
    {
        $faqs = Faq::orderBy('id', 'asc')->paginate(10);
        return view('admin.faq.faqs', compact('faqs'));
    }

    // public function index()
    // {
    //     $faqs = Faq::latest()->get();
    //     return view('admin.faq.faq', compact('faqs'));
    // }

    public function show($id)
    {
        $faq = Faq::findOrFail($id);
        return view('admin.faq.show', compact('faq'));
    }

    public function destroy(Request $request, $id)
    {
        $faq = Faq::destroy($id);
        return redirect()->route('admin.faq.faqs')->with('success', 'Home deleted added.');
    }
}