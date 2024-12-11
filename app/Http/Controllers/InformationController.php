<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInformationRequest;
use App\Http\Requests\UpdateInformationRequest;
use App\Models\Information;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $informations = Information::orderByDesc('id')->get();

        return view('admin.information.index', compact('informations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.information.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInformationRequest $request)
    {
        DB::Transaction(function () use ($request) {
            $validated = $request->validated();

            if ($request->hasFile('thumbnail')) {
                $thumbnailPath = $request->file('thumbnail')->store('thumbnails', 'public');
                $validated['thumbnail'] = $thumbnailPath;
            }

            $information = Information::create($validated);
        });

        return redirect()->route('admin.information.index')->with('success', 'Data created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Information $information)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug)
    {
        $information = Information::where('slug', $slug)->firstOrFail();

        return view('admin.information.edit', compact('information'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInformationRequest $request, $slug)
    {
        $information = Information::where('slug', $slug)->firstOrFail();

        DB::transaction(function () use ($request, $information) {

            $validated = $request->validated();

            if ($request->hasFile('thumbnail')) {
                $thumbnailPath = $request->file('thumbnail')->store('thumbnails', 'public');
                $validated['thumbnail'] = $thumbnailPath;
            }


            $information->update($validated);
        });

        return redirect()->route('admin.information.index')->with('success', 'Information edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug)
    {
        $carousel = Information::where('slug', $slug)->firstOrFail();
        DB::beginTransaction();

        try {
            $carousel->delete();
            DB::commit();

            return redirect()->route('admin.information.index')->with('success', 'Data deleted successfully');
        } catch (\Exception $e) {
            DB::rollBack();

            return redirect()->route('admin.information.index')->with('error', 'Failed to delete Course. Please try again later.');
        }
    }
}
