<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consultation;
use Illuminate\Support\Facades\Log;

class ConsultationController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'phone'   => 'required|string|max:20',
            'service' => 'required|string|max:255',
        ]);

        Consultation::create([
            'name'    => $request->input('name'),
            'email'   => $request->input('email'),
            'phone'   => $request->input('phone'),
            'service' => $request->input('service'),
        ]);

        return redirect()->back()->with('success', 'Consultation request submitted successfully!');
    }

    public function consult()
    {
        $consultations = Consultation::orderBy('id', 'asc')->paginate(10);
        return view('admin.consultations.consult', compact('consultations'));
    }
}