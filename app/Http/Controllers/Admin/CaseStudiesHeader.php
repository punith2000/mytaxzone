<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CaseStudyHeader;

class CaseStudiesHeader extends Controller
{
    public function cs() {
        $casestudies = CaseStudyHeader::all();
        return view('admin.case_studies.cases.cs', compact('casestudies'));
    }

    public function add_hd() {
        return view('admin.case_studies.cases.add_hd');
    }

    public function create()
    {
        return view("admin.case_studies.cases.add_hd");
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
    
        CaseStudyHeader::create($data);
    
        return redirect()->route('admin.case_studies.cases.cs')->with('success', 'Case Study added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, $id)
    {
        $casestudy = CaseStudyHeader::find($id);

        if (!$casestudy) {
            abort(404, 'Case Study Header not found');
        }

        return view('admin.case_studies.cases.show', compact('casestudy'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        $casestudy = CaseStudyHeader::find($id);

        if (!$casestudy) {
            abort(404, 'Case Study Header not found');
        }

        return view('admin.case_studies.cases.edit', compact('casestudy'));
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
    
        $casestudy = CaseStudyHeader::find($id);

        $casestudy->update($data);
    
        return redirect()->route('admin.case_studies.cases.cs')->with('success', 'Case Study added successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        $casestudy = CaseStudyHeader::destroy($id);
        return redirect()->route('admin.case_studies.cases.cs')->with('success', 'Deleted successfully!');
    }
}