<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonials;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    public function test()
    {
        $testimonials = Testimonials::latest()->get(); // Fetch all testimonials from the database
        return view('admin.testimonials.test', compact('testimonials'));
    }

    public function add_test()
    {
        return view('admin.testimonials.add_test');
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
        return view("admin.testimonials.add_test");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);
    
        // Handle Image Upload
        $image_path = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
    
            // Generate a unique filename
            $fileName = time() . '_' . $file->getClientOriginalName();
    
            // Define destination path in public folder
            $destinationPath = public_path('uploads/testimonials');
    
            // Make sure folder exists
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }
    
            // Move the uploaded file
            $file->move($destinationPath, $fileName);
    
            // Save the relative path in the database
            $image_path = 'uploads/testimonials/' . $fileName;
        }
    
        // Save to database
        $testimonial = new Testimonials;
        $testimonial->name = $request->input('name');
        $testimonial->designation = $request->input('designation');
        $testimonial->content = $request->input('content');
        $testimonial->image = $image_path;
        $testimonial->save();
    
        return redirect()->route('admin.testimonials.test')->with('success', 'Testimonial added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, $id)
    {
        $testimonial = Testimonials::find($id);

        if (!$testimonial) {
            abort(404, 'Testimonial not found');
        }

        return view('admin.testimonials.show', compact('testimonial'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        $testimonial = Testimonials::find($id);

        if (!$testimonial) {
            abort(404, 'Testimonial not found');
        }

        return view('admin.testimonials.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $testimonial = Testimonials::findOrFail($id);

    // Validate fields (image is optional on update)
    $data = $request->validate([
        'name' => 'required|string|max:255',
        'designation' => 'required|string|max:255',
        'content' => 'required|string',
        'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
    ]);

    if ($request->hasFile('image')) {
        $file = $request->file('image');

        // Delete old image if it exists
        if ($testimonial->image && file_exists(public_path($testimonial->image))) {
            unlink(public_path($testimonial->image));
        }

        // Prepare new file
        $fileName = time() . '_' . $file->getClientOriginalName();
        $destinationPath = public_path('uploads/testimonials');

        // Ensure the destination directory exists
        if (!is_dir($destinationPath)) {
            mkdir($destinationPath, 0755, true);
        }

        // Move the uploaded file
        $file->move($destinationPath, $fileName);

        // Save the relative path in the database
        $testimonial->image = 'uploads/testimonials/' . $fileName;
    }

    // Handle Image Upload (only if new image is uploaded)
    // if ($request->hasFile('image')) {
    //     $image = $request->file('image');
    //     $image_name = time() . '_' . $image->getClientOriginalName();
    //     $image_path = $image->storeAs('testimonials', $image_name, 'public');
    //     $testimonial->image = $image_path;
    // }

    // Update other fields
    $testimonial->name = $data['name'];
    $testimonial->designation = $data['designation'];
    $testimonial->content = $data['content'];

    $testimonial->save();

    return redirect()->route('admin.testimonials.test')->with('success', 'Testimonial updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        $testimonial = Testimonials::findOrFail($id);

        // Delete old image if it exists
        if ($testimonial->image && file_exists(public_path($testimonial->image))) {
            unlink(public_path($testimonial->image));
        }

        // Finally delete the record
        $testimonial->delete();

        $testimonial = Testimonials::destroy($id);
        return redirect()->route('admin.testimonials.test')->with('success', 'Deleted successfully!');
    }
}