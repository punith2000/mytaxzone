<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function about()
    {
        $abouts = About::all();
        return view('admin.abouts.about', compact('abouts'));
    }

    public function add_about()
    {
        return view('admin.abouts.add_about');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // 
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
            'title' => 'required',
            'content' => 'required',
            'image1' => 'image',
            'image2' => 'image',
        
            'count1' => 'required|integer',
            'label1' => 'required|string',
            'count2' => 'required|integer',
            'label2' => 'required|string',
            'count3' => 'required|integer',
            'label3' => 'required|string',
        ]);
        
        $about = new About($request->except('image1', 'image2'));
        
        if ($request->hasFile('image1')) {
            $file = $request->file('image1');
    
            // Generate a unique filename
            $fileName = time() . '_' . $file->getClientOriginalName();
    
            // Define destination path in public folder
            $destinationPath = public_path('uploads/abouts');
    
            // Make sure folder exists
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }
    
            // Move the uploaded file
            $file->move($destinationPath, $fileName);
    
            // Save relative path in DB
            $about->image1 = 'uploads/abouts/' . $fileName;
        }

        if ($request->hasFile('image2')) {
            $file = $request->file('image2');
    
            // Generate a unique filename
            $fileName = time() . '_' . $file->getClientOriginalName();
    
            // Define destination path in public folder
            $destinationPath = public_path('uploads/abouts');
    
            // Make sure folder exists
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }
    
            // Move the uploaded file
            $file->move($destinationPath, $fileName);
    
            // Save relative path in DB
            $about->image2 = 'uploads/abouts/' . $fileName;
        }
        
        $about->save();

        return redirect()->route('admin.abouts.about')->with('success', 'About content added.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, $id)
    {
        $about = About::find($id);

        if (!$about) {
            abort(404, 'Abouts not found');
        }

        return view('admin.abouts.show', compact('about'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        $about = About::find($id);

        if (!$about) {
            abort(404, 'Abouts not found');
        }

        return view('admin.abouts.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Load existing About record
    $about = About::findOrFail($id);

    // Validate request
    $validated = $request->validate([
        'title'   => 'required|string',
        'content' => 'required|string',
        'image1'  => 'nullable|image|mimes:jpg,jpeg,png,gif,webp|max:5120',
        'image2'  => 'nullable|image|mimes:jpg,jpeg,png,gif,webp|max:5120',
        'count1'  => 'required|integer',
        'label1'  => 'required|string',
        'count2'  => 'required|integer',
        'label2'  => 'required|string',
        'count3'  => 'required|integer',
        'label3'  => 'required|string',
    ]);

    // Start with non-file fields
    $data = $request->except(['image1', 'image2']);

    // Upload path
    $destinationPath = public_path('uploads/abouts');
    if (!is_dir($destinationPath)) {
        mkdir($destinationPath, 0755, true);
    }

    // Replace image1 if new file uploaded
    if ($request->hasFile('image1')) {
        $file = $request->file('image1');
        $fileName = time() . '_1_' . uniqid() . '.' . $file->getClientOriginalExtension();
        $file->move($destinationPath, $fileName);

        // Delete old image if it exists
        if (!empty($about->image1) && file_exists(public_path($about->image1))) {
            unlink(public_path($about->image1));
        }

        $data['image1'] = 'uploads/abouts/' . $fileName;
    }

    // Replace image2 if new file uploaded
    if ($request->hasFile('image2')) {
        $file = $request->file('image2');
        $fileName = time() . '_2_' . uniqid() . '.' . $file->getClientOriginalExtension();
        $file->move($destinationPath, $fileName);

        // Delete old image if it exists
        if (!empty($about->image2) && file_exists(public_path($about->image2))) {
            unlink(public_path($about->image2));
        }

        $data['image2'] = 'uploads/abouts/' . $fileName;
    }

    // Update DB record
    $about->update($data);

    return redirect()->route('admin.abouts.about')
                     ->with('success', 'About updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        $about = About::findOrFail($id);

        // Delete old image if it exists
        if (!empty($about->image1) && file_exists(public_path($about->image1))) {
            unlink(public_path($about->image1));
        }

        // Delete old image if it exists
        if (!empty($about->image2) && file_exists(public_path($about->image2))) {
            unlink(public_path($about->image2));
        }

        // Delete the record
        $about->delete();

        return redirect()->route('admin.abouts.about')->with('success', 'Deleted successfully.');
    }
}