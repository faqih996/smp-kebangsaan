<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCarouselRequest;
use App\Http\Requests\UpdateCarouselRequest;
use App\Models\Carousel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carousels = Carousel::orderByDesc('id')->get();

        return view('admin.carousel.index', compact('carousels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.carousel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCarouselRequest $request)
    {
        DB::Transaction(function () use ($request){
            $validated = $request->validated();

            if ($request->hasFile('thumbnail')) {
                $thumbnailPath = $request->file('thumbnail')->store('thumbnails', 'public');
                $validated['thumbnail'] = $thumbnailPath;
            }

            $carousel = Carousel::create($validated);

        });
        return redirect()->route('admin.carousel.index')->with('success', 'Carousel created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Carousel $carousel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug)
    {
        $carousel = Carousel::where('slug', $slug)->firstOrFail();
        return view('admin.carousel.edit', compact('carousel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCarouselRequest $request, $slug)
    {
        $carousel = Carousel::where('slug', $slug)->firstOrFail();

        DB::transaction(function () use ($request, $carousel) {

            $validated = $request->validated();

            if ($request->hasFile('thumbnail')) {
                $thumbnailPath = $request->file('thumbnail')->store('thumbnails', 'public');
                $validated['thumbnail'] = $thumbnailPath;
            }

            $validated['slug'] = Str::slug($validated['name']);

            $carousel->update($validated);

        });

        return redirect()->route('admin.carousel.index')->with('success', 'Carousel edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug)
    {
        $carousel = Carousel::where('slug', $slug)->firstOrFail();
        DB::beginTransaction();

        try {
            $carousel->delete();
            DB::commit();

            return redirect()->route('admin.carousel.index')->with('success', 'Course deleted successfully');
        } catch (\Exception $e) {
            DB::rollBack();

            return redirect()->route('admin.carousel.index')->with('error', 'Failed to delete Course. Please try again later.');
        }
    }
}