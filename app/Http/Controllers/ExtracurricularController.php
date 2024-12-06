<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreExtracurricularRequest;
use App\Http\Requests\UpdateExtracurricularRequest;
use App\Models\Extracurricular;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ExtracurricularController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $extracurriculars = Extracurricular::orderByDesc('id')->get();

        return view('admin.extracurricular.index', compact('extracurriculars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.extracurricular.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreExtracurricularRequest $request)
    {
        DB::Transaction(function () use ($request) {
            $validated = $request->validated();

            if ($request->hasFile('thumbnail1')) {
                $thumbnailPath1 = $request->file('thumbnail1')->store('thumbnails', 'public');
                $validated['thumbnail1'] = $thumbnailPath1;
            }

            if ($request->hasFile('thumbnail2')) {
                $thumbnailPath2 = $request->file('thumbnail2')->store('thumbnails', 'public');
                $validated['thumbnail2'] = $thumbnailPath2;
            }

            if ($request->hasFile('thumbnail3')) {
                $thumbnailPath3 = $request->file('thumbnail3')->store('thumbnails', 'public');
                $validated['thumbnail3'] = $thumbnailPath3;
            }

            if ($request->hasFile('thumbnail4')) {
                $thumbnailPath4 = $request->file('thumbnail4')->store('thumbnails', 'public');
                $validated['thumbnail4'] = $thumbnailPath4;
            }

            if ($request->hasFile('thumbnail5')) {
                $thumbnailPath5 = $request->file('thumbnail5')->store('thumbnails', 'public');
                $validated['thumbnail5'] = $thumbnailPath5;
            }

            $validated['slug'] = Str::slug($validated['name']);

            $extracurricular = Extracurricular::create($validated);
        });
        return redirect()->route('admin.extracurricular.index')->with('success', 'Extracurricular created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Extracurricular $extracurricular)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug)
    {
        $extracurricular = Extracurricular::where('slug', $slug)->firstOrFail();
        return view('admin.extracurricular.edit', compact('extracurricular'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateExtracurricularRequest $request, $slug)
    {
        $extracurricular = Extracurricular::where('slug', $slug)->firstOrFail();

        DB::transaction(function () use ($request, $extracurricular) {

            $validated = $request->validated();

            if ($request->hasFile('thumbnail1')) {
                $thumbnailPath1 = $request->file('thumbnail1')->store('thumbnails', 'public');
                $validated['thumbnail1'] = $thumbnailPath1;
            }

            if ($request->hasFile('thumbnail2')) {
                $thumbnailPath2 = $request->file('thumbnail2')->store('thumbnails', 'public');
                $validated['thumbnail2'] = $thumbnailPath2;
            }

            if ($request->hasFile('thumbnail3')) {
                $thumbnailPath3 = $request->file('thumbnail3')->store('thumbnails', 'public');
                $validated['thumbnail3'] = $thumbnailPath3;
            }

            if ($request->hasFile('thumbnail4')) {
                $thumbnailPath4 = $request->file('thumbnail4')->store('thumbnails', 'public');
                $validated['thumbnail4'] = $thumbnailPath4;
            }

            if ($request->hasFile('thumbnail5')) {
                $thumbnailPath5 = $request->file('thumbnail5')->store('thumbnails', 'public');
                $validated['thumbnail5'] = $thumbnailPath5;
            }

            $validated['slug'] = Str::slug($validated['name']);

            $extracurricular->update($validated);
        });

        return redirect()->route('admin.extracurricular.index')->with('success', 'Extracurricular updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug)
    {
        $extracurricular = Extracurricular::where('slug', $slug)->firstOrFail();
        DB::beginTransaction();

        try {
            $extracurricular->delete();
            DB::commit();

            return redirect()->route('admin.extracurricular.index')->with('success', 'Extracurricular deleted successfully');
        } catch (\Exception $e) {
            DB::rollBack();

            return redirect()->route('admin.extracurricular.index')->with('error', 'Failed to delete Extracurricular. Please try again later.');
        }
    }
}