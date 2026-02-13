<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    public function team()
    {
        $teams = Team::paginate(5); // Fetch all testimonials from the database
        return view('admin.teams.team', compact('teams'));
    }

    public function add_team()
    {
        return view('admin.teams.add_team');
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
        return view("admin.teams.add_team");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        // Upload image
        $image_path = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
    
            // Generate a unique filename
            $fileName = time() . '_' . $file->getClientOriginalName();
    
            // Define destination path in public folder
            $destinationPath = public_path('uploads/teams');
    
            // Make sure folder exists
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }
    
            // Move the uploaded file
            $file->move($destinationPath, $fileName);
    
            // Save the relative path in the database
            $image_path = 'uploads/teams/' . $fileName;
        }

        // Save to database
        $team = new Team();
        $team->name = $request->name;
        $team->designation = $request->designation;
        $team->image = $image_path;
        $team->save();

        return redirect()->route('admin.teams.team')->with('success', 'Team added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, $id)
    {
        $team = Team::find($id);

        if (!$team) {
            abort(404, 'Team not found');
        }

        return view('admin.teams.show', compact('team'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        $team = Team::find($id);

        if (!$team) {
            abort(404, 'Team not found');
        }

        return view('admin.teams.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);
    
        // Find the team member
        $team = Team::findOrFail($id);
    
        if ($request->hasFile('image')) {
            $file = $request->file('image');
    
            // Delete old image if it exists
            if ($team->image && file_exists(public_path($team->image))) {
                unlink(public_path($team->image));
            }
    
            // Prepare new file
            $fileName = time() . '_' . $file->getClientOriginalName();
            $destinationPath = public_path('uploads/teams');
    
            // Ensure the destination directory exists
            if (!is_dir($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }
    
            // Move the uploaded file
            $file->move($destinationPath, $fileName);
    
            // Save the relative path in the database
            $team->image = 'uploads/teams/' . $fileName;
        }
    
        // Update other fields
        $team->name = $request->name;
        $team->designation = $request->designation;
    
        $team->save();
    
        return redirect()->route('admin.teams.team')->with('success', 'Team updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        $team = Team::findOrFail($id);

        // Delete old image if it exists
        if ($team->image && file_exists(public_path($team->image))) {
            unlink(public_path($team->image));
        }

        // Finally delete the record
        $team->delete();

        return redirect()->route('admin.teams.team')->with('success', 'Deleted successfully.');
    }
}