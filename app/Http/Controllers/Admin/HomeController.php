<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function home()
    {
        $homes = Home::all();
        return view('admin.homes.home', compact('homes'));
    }

    public function add_home()
    {
        return view('admin.homes.add_home');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.homes.add_home");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $home = new Home();
        $home->title = $request->input('title');
        $home->content = $request->input('content');
    
        if ($request->hasFile('image')) {
            $file = $request->file('image');
    
            // Generate a unique filename
            $fileName = time() . '_' . $file->getClientOriginalName();
    
            // Define destination path in public folder
            $destinationPath = public_path('uploads/homes');
    
            // Make sure folder exists
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }
    
            // Move the uploaded file
            $file->move($destinationPath, $fileName);
    
            // Save relative path in DB
            $home->image = 'uploads/homes/' . $fileName;
        }
    
        $home->save();
    
        return redirect()->route('admin.homes.home')->with('success', 'Home added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, $id)
    {
        $home = Home::find($id);

        if (!$home) {
            abort(404, 'Home not found');
        }

        return view('admin.homes.show', compact('home'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        $home = Home::find($id);

        if (!$home) {
            abort(404, 'Home not found');
        }

        return view('admin.homes.edit', compact('home'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate request data
    $request->validate([
        'title' => 'required|string',
        'content' => 'required|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $home = Home::findOrFail($id);
    $home->title = $request->input('title');
    $home->content = $request->input('content');

    if ($request->hasFile('image')) {
        $file = $request->file('image');

        // Delete old image if it exists
        if ($home->image && file_exists(public_path($home->image))) {
            unlink(public_path($home->image));
        }

        // Prepare new file
        $fileName = time() . '_' . $file->getClientOriginalName();
        $destinationPath = public_path('uploads/homes');

        // Ensure the destination directory exists
        if (!is_dir($destinationPath)) {
            mkdir($destinationPath, 0755, true);
        }

        // Move the uploaded file
        $file->move($destinationPath, $fileName);

        // Save the relative path in the database
        $home->image = 'uploads/homes/' . $fileName;
    }

    $home->save();

    return redirect()->route('admin.homes.home')->with('success', 'Home updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        $home = Home::findOrFail($id);

        // Delete image if it exists
        if ($home->image && file_exists(public_path($home->image))) {
            unlink(public_path($home->image));
        }

        // Finally delete the record
        $home->delete();

        return redirect()->route('admin.homes.home')->with('success', 'Home deleted successfully.');
    }
}