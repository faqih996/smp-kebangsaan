<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSpeachRequest;
use App\Http\Requests\UpdateSpeachRequest;
use App\Models\Speach;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SpeachController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $speach = Speach::first();

        return view('admin.speach.index', compact('speach'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.speach.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSpeachRequest $request)
    {
        DB::transaction(function () use ($request) {
            // Validate and retrieve the data from the request
            $validated = $request->validated();

            if ($request->hasFile('thumbnail')) {
                $thumbnailPath = $request->file('thumbnail')->store('thumbnails', 'public');
                $validated['thumbnail'] = $thumbnailPath;
            }

            // Create the Vision instance
            $speach = Speach::create($validated);
        });

        // Redirect with success message
        return redirect()->route('admin.speach.index')->with('success', 'Data created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Speach $speach)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $speach = Speach::findOrFail($id);

        return view('admin.speach.edit', compact('speach'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSpeachRequest $request, Speach $speach)
    {
        DB::transaction(function () use ($request, $speach) {

            $validated = $request->validated();

            if ($request->hasFile('thumbnail')) {
                $thumbnailPath = $request->file('thumbnail')->store('thumbnails', 'public');
                $validated['thumbnail'] = $thumbnailPath;
            }

            $speach->update($validated);
        });

        return redirect()->route('admin.speach.index')->with('success', 'Data edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Speach $speach)
    {
        //
    }
}