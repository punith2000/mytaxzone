<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        Contact::create($request->only([
            'name', 'email', 'phone', 'subject', 'message'
        ]));

        return redirect()->route('contact')->with('success', 'Your message has been sent successfully!');
    }

    // Admin panel: list all contacts
    public function contacts()
    {
        $contacts = Contact::orderBy('id', 'asc')->paginate(10);
        return view('admin.contacts', compact('contacts'));
    }

    public function show($id)
    {
        $contact = Contact::findOrFail($id);
        return view('admin.contact_show', compact('contact'));
    }

    // Edit contact
    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        return view('admin.contact_edit', compact('contact'));
    }

    // Update contact
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|string|max:20',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        $contact = Contact::findOrFail($id);
        $contact->update($request->only(['name', 'email', 'phone', 'subject', 'message']));

        return redirect()->route('admin.contacts')->with('success', 'Contact updated successfully.');
    }

    // Delete contact
    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        return redirect()->route('admin.contacts')->with('success', 'Contact deleted successfully.');
    }
}