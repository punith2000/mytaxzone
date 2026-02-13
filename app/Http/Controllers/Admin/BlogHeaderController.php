<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogHeader;
use Illuminate\Http\Request;

class BlogHeaderController extends Controller
{
    public function blog_head() {
        $blogheader = BlogHeader::all();
        return view('admin.blogs.bloghead.blog_head', compact('blogheader'));
    }

    public function add_blog_head() {
        return view('admin.blogs.bloghead.add_blog_head');
    }

    public function create()
    {
        return view("admin.blogs.bloghead.add_blog_head");
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
    
        BlogHeader::create($data);
    
        return redirect()->route('admin.blogs.bloghead.blog_head')->with('success', 'Case Study added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, $id)
    {
        $bloghead = BlogHeader::find($id);

        if (!$bloghead) {
            abort(404, 'Blog Header not found');
        }

        return view('admin.blogs.bloghead.show', compact('bloghead'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        $bloghead = BlogHeader::find($id);

        if (!$bloghead) {
            abort(404, 'Blog Header not found');
        }

        return view('admin.blogs.bloghead.edit', compact('bloghead'));
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
    
        $bloghead = BlogHeader::find($id);

        $bloghead->update($data);
    
        return redirect()->route('admin.blogs.bloghead.blog_head')->with('success', 'Blog Header added successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        $bloghead = BlogHeader::destroy($id);
        return redirect()->route('admin.blogs.bloghead.blog_head')->with('success', 'Deleted successfully!');
    }
}