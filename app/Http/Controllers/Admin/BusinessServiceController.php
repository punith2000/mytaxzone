<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BusinessService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BusinessServiceController extends Controller
{
    public function business()
    {
        $business = BusinessService::all();
        return view('admin.services.bs.business', compact('business'));
    }

    public function add_bs()
    {
        return view('admin.services.bs.add_bs');
    }

    public function create()
    {
        return view('admin.services.bs.add_bs');
    }

    public function store(Request $request)
    {
        $bs = new BusinessService();

        // Corrected field name
        $bs->title = $request->input('title');
        $bs->content = $request->input('content');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
    
            // Generate a unique filename
            $fileName = time() . '_' . $file->getClientOriginalName();
    
            // Define destination path in public folder
            $destinationPath = public_path('uploads/business');
    
            // Make sure folder exists
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }
    
            // Move the uploaded file
            $file->move($destinationPath, $fileName);
    
            // Save relative path in DB
            $bs->image = 'uploads/business/' . $fileName;
        }

        $bs->save();

        return redirect()->route('admin.services.bs.business')->with('success', 'Business Service added Successfull.');
    }

    public function show(Request $request, $id)
    {
        $bs = BusinessService::find($id);

        if (!$bs) {
            abort(404, 'Business service not found');
        }

        return view('admin.services.bs.show', compact('bs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        $bs = BusinessService::find($id);

        if (!$bs) {
            abort(404, 'Business service not found');
        }

        return view('admin.services.bs.edit', compact('bs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $bs = BusinessService::find($id);

        // Corrected field name
        $bs->title = $request->input('title');
        $bs->content = $request->input('content');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
    
            // Delete old image if it exists
            if ($bs->image && file_exists(public_path($bs->image))) {
                unlink(public_path($bs->image));
            }
    
            // Prepare new file
            $fileName = time() . '_' . $file->getClientOriginalName();
            $destinationPath = public_path('uploads/business');
    
            // Ensure the destination directory exists
            if (!is_dir($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }
    
            // Move the uploaded file
            $file->move($destinationPath, $fileName);
    
            // Save the relative path in the database
            $bs->image = 'uploads/business/' . $fileName;
        }

        $bs->save();

        return redirect()->route('admin.services.bs.business')->with('success', 'Business Service updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        $bs = BusinessService::findOrFail($id);

        // Delete old image if it exists
        if ($bs->image && file_exists(public_path($bs->image))) {
            unlink(public_path($bs->image));
        }

        // Finally delete the record
        $bs->delete();

        return redirect()->route('admin.services.bs.business')->with('success', 'Deleted successfully.');
    }
}