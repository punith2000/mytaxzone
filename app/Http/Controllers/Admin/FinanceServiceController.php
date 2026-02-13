<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FinanceService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FinanceServiceController extends Controller
{
    public function finance()
    {
        $finance = FinanceService::all();
        return view('admin.services.fs.finance', compact('finance'));
    }

    public function add_fs()
    {
        return view('admin.services.fs.add_fs');
    }

    public function create()
    {
        return view('admin.services.fs.add_fs');
    }

    public function store(Request $request)
    {
        $fs = new FinanceService();

        // Corrected field name
        $fs->title = $request->input('title');
        $fs->content = $request->input('content');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
    
            // Generate a unique filename
            $fileName = time() . '_' . $file->getClientOriginalName();
    
            // Define destination path in public folder
            $destinationPath = public_path('uploads/finance');
    
            // Make sure folder exists
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }
    
            // Move the uploaded file
            $file->move($destinationPath, $fileName);
    
            // Save relative path in DB
            $fs->image = 'uploads/finance/' . $fileName;
        }

        $fs->save();

        return redirect()->route('admin.services.fs.finance')->with('success', 'Finance Service added Successfull.');
    }

    public function show(Request $request, $id)
    {
        $fs = FinanceService::find($id);

        if (!$fs) {
            abort(404, 'Finance service not found');
        }

        return view('admin.services.fs.show', compact('fs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        $fs = FinanceService::find($id);

        if (!$fs) {
            abort(404, 'Finance service not found');
        }

        return view('admin.services.fs.edit', compact('fs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $fs = FinanceService::find($id);

        // Corrected field name
        $fs->title = $request->input('title');
        $fs->content = $request->input('content');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
    
            // Delete old image if it exists
            if ($fs->image && file_exists(public_path($fs->image))) {
                unlink(public_path($fs->image));
            }
    
            // Prepare new file
            $fileName = time() . '_' . $file->getClientOriginalName();
            $destinationPath = public_path('uploads/finance');
    
            // Ensure the destination directory exists
            if (!is_dir($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }
    
            // Move the uploaded file
            $file->move($destinationPath, $fileName);
    
            // Save the relative path in the database
            $fs->image = 'uploads/finance/' . $fileName;
        }

        $fs->save();

        return redirect()->route('admin.services.fs.finance')->with('success', 'Finance Services updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        $fs = FinanceService::findOrFail($id);

        // Delete old image if it exists
        if ($fs->image && file_exists(public_path($fs->image))) {
            unlink(public_path($fs->image));
        }

        // Finally delete the record
        $fs->delete();

        return redirect()->route('admin.services.fs.finance')->with('success', 'Deleted successfully.');
    }
}