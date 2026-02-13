<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Services;
use Illuminate\Support\Facades\Storage;

class ServicesController extends Controller
{
    public function service()
    {
        $services = Services::paginate(5);
        return view('admin.services.service', compact('services'));
    }

    public function add_service()
    {
        return view('admin.services.add_service');
    }

    public function create()
    {
        return view('admin.services.add_service');
    }

    public function store(Request $request)
    {
        $service = new Services();

        // Corrected field name
        $service->title = $request->input('title');
        $service->content = $request->input('content');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
    
            // Generate a unique filename
            $fileName = time() . '_' . $file->getClientOriginalName();
    
            // Define destination path in public folder
            $destinationPath = public_path('uploads/services');
    
            // Make sure folder exists
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }
    
            // Move the uploaded file
            $file->move($destinationPath, $fileName);
    
            // Save relative path in DB
            $service->image = 'uploads/services/' . $fileName;
        }

        $service->save();

        return redirect()->route('admin.services.service')->with('success', 'Services added Successfull.');
    }

    public function show(Request $request, $id)
    {
        $service = Services::find($id);

        if (!$service) {
            abort(404, 'service not found');
        }

        return view('admin.services.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        $service = Services::find($id);

        if (!$service) {
            abort(404, 'service not found');
        }

        return view('admin.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $service = Services::find($id);

        // Corrected field name
        $service->title = $request->input('title');
        $service->content = $request->input('content');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
    
            // Delete old image if it exists
            if ($service->image && file_exists(public_path($service->image))) {
                unlink(public_path($service->image));
            }
    
            // Prepare new file
            $fileName = time() . '_' . $file->getClientOriginalName();
            $destinationPath = public_path('uploads/services');
    
            // Ensure the destination directory exists
            if (!is_dir($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }
    
            // Move the uploaded file
            $file->move($destinationPath, $fileName);
    
            // Save the relative path in the database
            $service->image = 'uploads/services/' . $fileName;
        }

        $service->save();

        return redirect()->route('admin.services.service')->with('success', 'Services updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        $service = Services::findOrFail($id);

        // Delete old image if it exists
        if ($service->image && file_exists(public_path($service->image))) {
            unlink(public_path($service->image));
        }

        // Finally delete the record
        $service->delete();

        $service = Services::destroy($id);
        return redirect()->route('admin.services.service')->with('success', 'Deleted successfully.');
    }
}