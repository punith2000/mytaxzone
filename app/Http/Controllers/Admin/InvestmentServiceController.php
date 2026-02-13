<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InvestmentService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InvestmentServiceController extends Controller
{
    public function investment()
    {
        $investment = InvestmentService::all();
        return view('admin.services.invest.investment', compact('investment'));
    }

    public function add_invest()
    {
        return view('admin.services.invest.add_invest');
    }

    public function create()
    {
        return view('admin.services.invest.add_invest');
    }

    public function store(Request $request)
    {
        $invest = new InvestmentService();

        // Corrected field name
        $invest->title = $request->input('title');
        $invest->content = $request->input('content');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
    
            // Generate a unique filename
            $fileName = time() . '_' . $file->getClientOriginalName();
    
            // Define destination path in public folder
            $destinationPath = public_path('uploads/investment');
    
            // Make sure folder exists
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }
    
            // Move the uploaded file
            $file->move($destinationPath, $fileName);
    
            // Save relative path in DB
            $invest->image = 'uploads/investment/' . $fileName;
        }

        $invest->save();

        return redirect()->route('admin.services.invest.investment')->with('success', 'Investment Service added Successfull.');
    }

    public function show(Request $request, $id)
    {
        $invest = InvestmentService::find($id);

        if (!$invest) {
            abort(404, 'Investment service not found');
        }

        return view('admin.services.invest.show', compact('invest'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        $invest = InvestmentService::find($id);

        if (!$invest) {
            abort(404, 'Investment service not found');
        }

        return view('admin.services.invest.edit', compact('invest'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $invest = InvestmentService::find($id);

        // Corrected field name
        $invest->title = $request->input('title');
        $invest->content = $request->input('content');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
    
            // Delete old image if it exists
            if ($invest->image && file_exists(public_path($invest->image))) {
                unlink(public_path($invest->image));
            }
    
            // Prepare new file
            $fileName = time() . '_' . $file->getClientOriginalName();
            $destinationPath = public_path('uploads/investment');
    
            // Ensure the destination directory exists
            if (!is_dir($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }
    
            // Move the uploaded file
            $file->move($destinationPath, $fileName);
    
            // Save the relative path in the database
            $invest->image = 'uploads/investment/' . $fileName;
        }

        $invest->save();

        return redirect()->route('admin.services.invest.investment')->with('success', 'Investment Service updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        $invest = InvestmentService::findOrFail($id);

        // Delete old image if it exists
        if ($invest->image && file_exists(public_path($invest->image))) {
            unlink(public_path($invest->image));
        }

        // Finally delete the record
        $invest->delete();

        $invest = InvestmentService::destroy($id);
        return redirect()->route('admin.services.invest.investment')->with('success', 'Deleted successfully.');
    }
}