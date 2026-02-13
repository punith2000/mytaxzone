<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CaseStudies;
use Illuminate\Support\Facades\Storage;

class CaseStudiesController extends Controller
{
    public function case_study()
    {
        $cases = CaseStudies::paginate(6); // Fetch all testimonials from the database
        return view('admin.case_studies.case_study', compact('cases'));
    }

    public function add_cs()
    {
        return view('admin.case_studies.add_cs');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.case_studies.add_cs");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'role' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048'
        ]);
    
        if ($request->hasFile('image')) {
            $file = $request->file('image');
    
            // Generate a unique filename
            $fileName = time() . '_' . $file->getClientOriginalName();
    
            // Define destination path in public folder
            $destinationPath = public_path('uploads/case_studies');
    
            // Make sure folder exists
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }
    
            // Move the uploaded file
            $file->move($destinationPath, $fileName);
    
            // Save relative path in DB data array
            $data['image'] = 'uploads/case_studies/' . $fileName;
        }
    
        CaseStudies::create($data);
    
        return redirect()->route('admin.case_studies.case_study')->with('success', 'Case Study added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, $id)
    {
        $case = CaseStudies::find($id);

        if (!$case) {
            abort(404, 'Case Study not found');
        }

        return view('admin.case_studies.show', compact('case'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        $case = CaseStudies::find($id);

        if (!$case) {
            abort(404, 'Case Study not found');
        }

        return view('admin.case_studies.edit', compact('case'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $case = CaseStudies::find($id);

        $data = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'role' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
    
            // Delete old image if it exists
            if ($case->image && file_exists(public_path($case->image))) {
                unlink(public_path($case->image));
            }
    
            // Prepare new file
            $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('uploads/case_studies');
    
            // Ensure the destination directory exists
            if (!is_dir($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }
    
            // Move the uploaded file
            $file->move($destinationPath, $fileName);
    
            // Save the relative path in the DB data
            $data['image'] = 'uploads/case_studies/' . $fileName;
        }

        $case->update($data);
    
        return redirect()->route('admin.case_studies.case_study')->with('success', 'Case Study updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        $case = CaseStudies::findOrFail($id);

        // Delete old image if it exists
        if ($case->image && file_exists(public_path($case->image))) {
            unlink(public_path($case->image));
        }

        // Finally delete the record
        $case->delete();
        
        return redirect()->route('admin.case_studies.case_study')->with('success', 'Deleted successfully!');
    }
}