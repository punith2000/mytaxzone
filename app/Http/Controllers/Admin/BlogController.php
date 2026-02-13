<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    public function blog()
    {
        $blogs = Blog::orderBy('created_at', 'asc')->paginate(5);
        return view('admin.blogs.blog', compact('blogs'));
    }

    /**
     * Show the add blog form (admin).
     */
    public function add_blog()
    {
        return view('admin.blogs.add_blog');
    }

    /**
     * If you have an API-like create method or different name, keep it.
     * This keeps parity with your existing route naming if used.
     */
    public function create()
    {
        return $this->add_blog();
    }

    /**
     * Store a newly created blog in storage.
     */
    public function store(Request $request)
    {
        // validation rules
        $rules = [
            'title'        => 'required|string|max:255',
            'content'      => 'required|string',
            'image'        => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
            'author_name'  => 'required|string|max:255',
            'author_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
            // 'published_at' => 'nullable|date',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Prepare data except files
        $data = $request->except(['image', 'author_image', '_token', '_method']);

        // Handle blog image
        if ($request->hasFile('image')) {
            $file = $request->file('image');
    
            // Generate a unique filename
            $fileName = time() . '_' . $file->getClientOriginalName();
    
            // Define destination path in public folder
            $destinationPath = public_path('uploads/blogs');
    
            // Make sure folder exists
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }
    
            // Move the uploaded file
            $file->move($destinationPath, $fileName);
    
            // Save relative path in DB data array
            $data['image'] = 'uploads/blogs/' . $fileName;
        }

        // Handle author image
        if ($request->hasFile('author_image')) {
            $file = $request->file('author_image');
    
            // Generate a unique filename
            $fileName = time() . '_' . $file->getClientOriginalName();
    
            // Define destination path in public folder
            $destinationPath = public_path('uploads/author_image');
    
            // Make sure folder exists
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }
    
            // Move the uploaded file
            $file->move($destinationPath, $fileName);
    
            // Save relative path in DB data array
            $data['author_image'] = 'uploads/author_image/' . $fileName;
        }

        // Create blog
        $blog = Blog::create($data);

        if ($blog) {
            return redirect()->route('admin.blogs.blog')->with('success', 'Blog added successfully.');
        }

        return redirect()->back()->with('error', 'Failed to add blog.')->withInput();
    }

    /**
     * Display a single blog (admin view).
     */
    public function show(Request $request, $id)
    {
        $blog = Blog::find($id);
        if (! $blog) {
            abort(404, 'Blog not found');
        }
        return view('admin.blogs.show', compact('blog'));
    }

    /**
     * Show edit form.
     */
    public function edit(Request $request, $id)
    {
        $blog = Blog::find($id);
        if (! $blog) {
            abort(404, 'Blog not found');
        }
        return view('admin.blogs.edit', compact('blog'));
    }

    /**
     * Update an existing blog.
     */
    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);
        if (! $blog) {
            return redirect()->route('admin.blogs.blog')->with('error', 'Blog not found.');
        }

        $rules = [
            'title'        => 'required|string|max:255',
            'content'      => 'required|string',
            'image'        => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
            'author_name'  => 'required|string|max:255',
            'author_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data = $request->except(['image', 'author_image', '_token', '_method']);

        // Replace image if provided (and optionally delete old)
        if ($request->hasFile('image')) {
            $file = $request->file('image');
    
            // Delete old image if it exists
            if ($blog->image && file_exists(public_path($blog->image))) {
                unlink(public_path($blog->image));
            }
    
            // Prepare new file
            $fileName = time() . '_' . $file->getClientOriginalName();
            $destinationPath = public_path('uploads/blogs');
    
            // Ensure the destination directory exists
            if (!is_dir($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }
    
            // Move the uploaded file
            $file->move($destinationPath, $fileName);
    
            // Save the relative path in the database
            $blog->image = 'uploads/blogs/' . $fileName;
        }

        if ($request->hasFile('author_image')) {
            $file = $request->file('author_image');
    
            // Delete old image if it exists
            if ($blog->author_image && file_exists(public_path($blog->author_image))) {
                unlink(public_path($blog->author_image));
            }
    
            // Prepare new file
            $fileName = time() . '_' . $file->getClientOriginalName();
            $destinationPath = public_path('uploads/author_image');
    
            // Ensure the destination directory exists
            if (!is_dir($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }
    
            // Move the uploaded file
            $file->move($destinationPath, $fileName);
    
            // Save the relative path in the database
            $blog->author_image = 'uploads/author_image/' . $fileName;
        }

        $blog->update($data);

        return redirect()->route('admin.blogs.blog')->with('success', 'Blog updated successfully.');
    }

    /**
     * Delete blog.
     */
    public function destroy(Request $request, $id)
    {
        $blog = Blog::find($id);
        if (! $blog) {
            return redirect()->route('admin.blogs.blog')->with('error', 'Blog not found.');
        }

        // delete files if present
        if ($blog->image && file_exists(public_path($blog->image))) {
            unlink(public_path($blog->image));
        }
        if ($blog->author_image && file_exists(public_path($blog->author_image))) {
            unlink(public_path($blog->author_image));
        }

        $blog->delete();

        return redirect()->route('admin.blogs.blog')->with('success', 'Deleted successfully.');
    }
}