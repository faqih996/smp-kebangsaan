<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFacilityRequest;
use App\Http\Requests\UpdateFacilityRequest;
use App\Models\Facility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $facilities = Facility::orderByDesc('id')->get();

        return view('admin.facility.index', compact('facilities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.facility.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFacilityRequest $request)
    {
        DB::Transaction(function () use ($request) {
            $validated = $request->validated();

            if ($request->hasFile('thumbnail')) {
                $thumbnailPath = $request->file('thumbnail')->store('thumbnails', 'public');
                $validated['thumbnail'] = $thumbnailPath;
            }

            $validated['slug'] = Str::slug($validated['name']);

            $facility = Facility::create($validated);
        });
        return redirect()->route('admin.facility.index')->with('success', 'Social Media created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Facility $facility)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug)
    {
        $facility = Facility::where('slug', $slug)->firstOrFail();
        return view('admin.facility.edit', compact('facility'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFacilityRequest $request, $slug)
    {
        $facility = Facility::where('slug', $slug)->firstOrFail();

        DB::transaction(function () use ($request, $facility) {

            $validated = $request->validated();

            if ($request->hasFile('thumbnail')) {
                $thumbnailPath = $request->file('thumbnail')->store('thumbnails', 'public');
                $validated['thumbnail'] = $thumbnailPath;
            }

            $validated['slug'] = Str::slug($validated['name']);

            $facility->update($validated);
        });

        return redirect()->route('admin.facility.index')->with('success', 'Social Media edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug)
    {
        $facility = Facility::where('slug', $slug)->firstOrFail();
        DB::beginTransaction();

        try {
            $facility->delete();
            DB::commit();

            return redirect()->route('admin.facility.index')->with('success', 'Social Media deleted successfully');
        } catch (\Exception $e) {
            DB::rollBack();

            return redirect()->route('admin.facility.index')->with('error', 'Failed to delete Social Media. Please try again later.');
        }
    }
}