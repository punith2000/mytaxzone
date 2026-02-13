<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TeamHeader;
use Illuminate\Support\Facades\Storage;

class TeamHeaderController extends Controller
{
    public function teams()
    {
        $teamheader = TeamHeader::all(); // Fetch all testimonials from the database
        return view('admin.teams.team.teams', compact('teamheader'));
    }

    public function add_teams()
    {
        return view('admin.teams.team.add_teams');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.teams.team.add_teams");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string'
        ]);
    
        TeamHeader::create($data);
    
        return redirect()->route('admin.teams.team.teams')->with('success', 'Team Header added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, $id)
    {
        $teamhead = TeamHeader::find($id);

        if (!$teamhead) {
            abort(404, 'Team not found');
        }

        return view('admin.teams.team.show', compact('teamhead'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        $teamhead = TeamHeader::find($id);

        if (!$teamhead) {
            abort(404, 'Team not found');
        }

        return view('admin.teams.team.edit', compact('teamhead'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string'
        ]);
    
        $teamhead = TeamHeader::find($id);

        $teamhead->update($data);
    
        return redirect()->route('admin.teams.team.teams')->with('success', 'Team Header added successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        $teamhead = TeamHeader::destroy($id);
        return redirect()->route('admin.teams.team.teams')->with('success', 'Deleted successfully.');
    }
}