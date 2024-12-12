<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGalleryRequest;
use App\Http\Requests\UpdateGalleryRequest;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries = Gallery::orderByDesc('id')->get();

        return view('admin.gallery.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGalleryRequest $request)
    {
        DB::Transaction(function () use ($request) {
            $validated = $request->validated();

            if ($request->hasFile('thumbnail')) {
                $thumbnailPath = $request->file('thumbnail')->store('thumbnails', 'public');
                $validated['thumbnail'] = $thumbnailPath;
            }

            $gallery = Gallery::create($validated);
        });
        return redirect()->route('admin.gallery.index')->with('success', 'Carousel created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $carousel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug)
    {
        $gallery = Gallery::where('slug', $slug)->firstOrFail();
        return view('admin.gallery.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGalleryRequest $request, $slug)
    {
        $gallery = Gallery::where('slug', $slug)->firstOrFail();

        DB::transaction(function () use ($request, $gallery) {

            $validated = $request->validated();

            if ($request->hasFile('thumbnail')) {
                $thumbnailPath = $request->file('thumbnail')->store('thumbnails', 'public');
                $validated['thumbnail'] = $thumbnailPath;
            }

            $validated['slug'] = Str::slug($validated['name']);

            $gallery->update($validated);
        });

        return redirect()->route('admin.gallery.index')->with('success', 'Data edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug)
    {
        $gallery = Gallery::where('slug', $slug)->firstOrFail();
        DB::beginTransaction();

        try {
            $gallery->delete();
            DB::commit();

            return redirect()->route('admin.gallery.index')->with('success', 'Course deleted successfully');
        } catch (\Exception $e) {
            DB::rollBack();

            return redirect()->route('admin.gallery.index')->with('error', 'Failed to delete Course. Please try again later.');
        }
    }
}