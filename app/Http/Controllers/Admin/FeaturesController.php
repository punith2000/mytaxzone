<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Features;
use Illuminate\Support\Facades\Storage;

class FeaturesController extends Controller
{
    public function feature()
    {
        $features = Features::paginate(5);
        return view('admin.features.feature', compact('features'));
    }

    public function add_feature()
    {
        return view('admin.features.add_feature');
    }

    public function create()
    {
        return view('admin.features.add_feature');
    }

    public function store(Request $request)
    {
        $feature = new Features();

        // Corrected field name
        $feature->title = $request->input('title');
        $feature->content = $request->input('content');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
    
            // Generate a unique filename
            $fileName = time() . '_' . $file->getClientOriginalName();
    
            // Define destination path in public folder
            $destinationPath = public_path('uploads/features');
    
            // Make sure folder exists
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }
    
            // Move the uploaded file
            $file->move($destinationPath, $fileName);
    
            // Save relative path in DB
            $feature->image = 'uploads/features/' . $fileName;
        }

        $feature->save();

        return redirect()->route('admin.features.feature')->with('success', 'Features added successfull.');
    }

    public function show(Request $request, $id)
    {
        $feature = Features::find($id);

        if (!$feature) {
            abort(404, 'Feature not found');
        }

        return view('admin.features.show', compact('feature'));
    }

    public function edit(Request $request, $id)
    {
        $feature = Features::find($id);

        if (!$feature) {
            abort(404, 'Feature not found');
        }

        return view('admin.features.edit', compact('feature'));
    }
    public function update(Request $request, string $id)
    {
        $feature = Features::find($id);

        // Corrected field name
        $feature->title = $request->input('title');
        $feature->content = $request->input('content');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
    
            // Delete old image if it exists
            if ($feature->image && file_exists(public_path($feature->image))) {
                unlink(public_path($feature->image));
            }
    
            // Prepare new file
            $fileName = time() . '_' . $file->getClientOriginalName();
            $destinationPath = public_path('uploads/features');
    
            // Ensure the destination directory exists
            if (!is_dir($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }
    
            // Move the uploaded file
            $file->move($destinationPath, $fileName);
    
            // Save the relative path in the database
            $feature->image = 'uploads/features/' . $fileName;
        }

        $feature->save();

        return redirect()->route('admin.features.feature')->with('success', 'Features added.');
    }
    public function destroy(Request $request, $id)
    {
        $feature = Features::findOrFail($id);

        // Delete old image if it exists
        if ($feature->image && file_exists(public_path($feature->image))) {
            unlink(public_path($feature->image));
        }

        // Finally delete the record
        $feature->delete();

        return redirect()->route('admin.features.feature')->with('success', 'Deleted successfully.');
    }
}