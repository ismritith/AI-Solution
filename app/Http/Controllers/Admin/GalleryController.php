<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GalleryAsset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        $assets = GalleryAsset::latest()->paginate(10);

        return view('admin.gallery.index', compact('assets'));
    }

    public function create()
    {
        return view('admin.gallery.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'category' => 'required|string|max:255',
            'media_type' => 'required|in:image,video',
            'upload_method' => 'required|in:upload,link',
            'file' => 'nullable|file|max:20480', // limit 20MB
            'external_url' => 'nullable|url|max:255',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'is_featured' => 'nullable|boolean',
        ]);

        $validated['is_featured'] = $request->has('is_featured');
        $validated['file_path'] = null;

        if ($request->input('upload_method') === 'upload' && $request->hasFile('file')) {
            $path = $request->file('file')->store('uploads', 'public');
            $validated['file_path'] = $path;
        }

        GalleryAsset::create($validated);

        return redirect()->route('admin.gallery.index')->with('success', 'Gallery asset initialized successfully.');
    }

    public function show(GalleryAsset $gallery)
    {
        $asset = $gallery;

        return view('admin.gallery.show', compact('asset'));
    }

    public function edit(GalleryAsset $gallery)
    {
        $asset = $gallery;

        return view('admin.gallery.edit', compact('asset'));
    }

    public function update(Request $request, GalleryAsset $gallery)
    {
        $validated = $request->validate([
            'category' => 'required|string|max:255',
            'media_type' => 'required|in:image,video',
            'upload_method' => 'required|in:upload,link',
            'file' => 'nullable|file|max:20480',
            'external_url' => 'nullable|url|max:255',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'is_featured' => 'nullable|boolean',
        ]);

        $validated['is_featured'] = $request->has('is_featured');

        if ($request->input('upload_method') === 'upload' && $request->hasFile('file')) {
            if ($gallery->file_path) {
                Storage::disk('public')->delete($gallery->file_path);
            }
            $path = $request->file('file')->store('uploads', 'public');
            $validated['file_path'] = $path;
        }

        $gallery->update($validated);

        return redirect()->route('admin.gallery.index')->with('success', 'Gallery asset has been re-synchronized.');
    }

    public function destroy(GalleryAsset $gallery)
    {
        if ($gallery->file_path) {
            Storage::disk('public')->delete($gallery->file_path);
        }
        $gallery->delete();

        return redirect()->route('admin.gallery.index')->with('success', 'Gallery asset purged from cluster.');
    }
}
