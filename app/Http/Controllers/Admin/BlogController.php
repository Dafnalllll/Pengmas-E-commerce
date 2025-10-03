<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::latest()->get();
        return view('pages.admin.blogadmin', compact('blogs'));
    }

    public function create()
    {
        return view('pages.admin.add.addblog');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul_blog'     => 'required|string|max:255',
            'tanggal_upload' => 'required|date',
            'kategori'       => 'nullable|string|max:255',
            'excerpt'        => 'required|string',
            'content'        => 'required|string',
            'image'          => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:15360', // max 15MB',
            'author'         => 'nullable|string|max:255',
            'is_published'   => 'boolean',
            'is_featured'    => 'boolean',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('blogs', 'public');
        }

        Blog::create([
            'judul_blog'     => $request->judul_blog,
            'tanggal_upload' => $request->tanggal_upload,
            'kategori'       => $request->kategori,
            'excerpt'        => $request->excerpt,
            'content'        => $request->input('content'),
            'image'          => $imagePath,
            'author'         => $request->author ?? 'Admin',
            'is_published'   => $request->has('is_published'),
            'is_featured'    => $request->has('is_featured'),
        ]);

        return redirect()->route('admin.blogs')->with('success', 'Blog berhasil ditambahkan');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blog = Blog::findOrFail($id);
        return view('pages.admin.edit.blog', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'judul_blog'     => 'required|string|max:255',
            'tanggal_upload' => 'required|date',
            'kategori'       => 'nullable|string|max:255',
            'excerpt'        => 'required|string',
            'content'        => 'required|string',
            'image'          => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:15360', // max 15MB',
            'author'         => 'nullable|string|max:255',
            'is_published'   => 'boolean',
            'is_featured'    => 'boolean',
        ]);

        $blog = Blog::findOrFail($id);

        $imagePath = $blog->image;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('blogs', 'public');
        }

        $blog->update([
            'judul_blog'     => $request->judul_blog,
            'tanggal_upload' => $request->tanggal_upload,
            'kategori'       => $request->kategori,
            'excerpt'        => $request->excerpt,
            'content'        => $request->input('content'),
            'image'          => $imagePath,
            'author'         => $request->author ?? 'Admin',
            'is_published'   => $request->has('is_published'),
            'is_featured'    => $request->has('is_featured'),
        ]);

        return redirect()->route('admin.blogs')->with('success', 'Blog berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return redirect()->route('admin.blogs')->with('success', 'Blog berhasil dihapus');
    }
}
