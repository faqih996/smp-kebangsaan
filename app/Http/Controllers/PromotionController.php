<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePromotionRequest;
use App\Models\benefitPromotion;
use App\Models\Promotion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $promotions = Promotion::orderByDesc('id')->get();

        $promotion_benefit = benefitPromotion::orderBy('id', 'asc')->where('promotion_id', 'id')->get();

        return view('admin.promotion.index', compact('promotions', 'promotion_benefit'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.promotion.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePromotionRequest $request)
    {
        DB::transaction(function () use ($request) {
            // Validate and retrieve the data from the request
            $validated = $request->validated();

            if ($request->hasFile('thumbnail')) {
                $thumbnailPath = $request->file('thumbnail')->store('thumbnails', 'public');
                $validated['thumbnail'] = $thumbnailPath;
            }

            // Create the Vision instance
            $promotion = Promotion::create($validated);

            // Prepare missions for mass assignment
            $benefits = array_map(function ($benefitName) use ($promotion) {
                return [
                    'promotion_id' => $promotion->id,  // Ensure the vision_id is set correctly
                    'name' => $benefitName,
                ];
            }, $validated['benefit']);  // Access 'mission' from the validated request data

            // Insert missions in bulk
            benefitPromotion::insert($benefits);
        });

        // Redirect with success message
        return redirect()->route('admin.promotion.index')->with('success', 'Data created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Promotion $promotion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug)
    {
        $promotion = Promotion::where('slug', $slug)->firstOrFail();
        $benefits = benefitPromotion::where('promotion_id', $promotion['id'])->get();

        return view('admin.promotion.edit', compact('promotion', 'benefits'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(request $request, $slug)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug)
    {
        $carousel = Promotion::where('slug', $slug)->firstOrFail();
        DB::beginTransaction();

        try {
            $carousel->delete();
            DB::commit();

            return redirect()->route('admin.promotion.index')->with('success', 'Data deleted successfully');
        } catch (\Exception $e) {
            DB::rollBack();

            return redirect()->route('admin.promotion.index')->with('error', 'Failed to delete Data. Please try again later.');
        }
    }
}