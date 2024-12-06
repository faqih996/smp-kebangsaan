<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSocmedRequest;
use App\Http\Requests\UpdateSocmedRequest;
use App\Models\SocialMedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SocialMediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $socialmedias = SocialMedia::orderByDesc('id')->get();

        return view('admin.socialmedia.index', compact('socialmedias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.socialmedia.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSocmedRequest $request)
    {
        DB::Transaction(function () use ($request) {
            $validated = $request->validated();

            if ($request->hasFile('icon')) {
                $iconPath = $request->file('icon')->store('icons', 'public');
                $validated['icon'] = $iconPath;
            }

            $validated['slug'] = Str::slug($validated['name']);

            $socialmedia = SocialMedia::create($validated);
        });
        return redirect()->route('admin.socialmedia.index')->with('success', 'Social Media created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(SocialMedia $socialMedia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug)
    {
        $socialmedia = SocialMedia::where('slug', $slug)->firstOrFail();
        return view('admin.socialmedia.edit', compact('socialmedia'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSocmedRequest $request, $slug)
    {
        $socialmedia = SocialMedia::where('slug', $slug)->firstOrFail();

        DB::transaction(function () use ($request, $socialmedia) {

            $validated = $request->validated();

            if ($request->hasFile('icon')) {
                $iconPath = $request->file('icon')->store('icons', 'public');
                $validated['icon'] = $iconPath;
            }

            $validated['slug'] = Str::slug($validated['name']);

            $socialmedia->update($validated);
        });

        return redirect()->route('admin.socialmedia.index')->with('success', 'Social Media edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug)
    {
        $socmed = SocialMedia::where('slug', $slug)->firstOrFail();
        DB::beginTransaction();

        try {
            $socmed->delete();
            DB::commit();

            return redirect()->route('admin.socialmedia.index')->with('success', 'Social Media deleted successfully');
        } catch (\Exception $e) {
            DB::rollBack();

            return redirect()->route('admin.socialmedia.index')->with('error', 'Failed to delete Social Media. Please try again later.');
        }
    }
}
