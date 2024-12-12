<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePromotionRequest;
use App\Http\Requests\UpdatePromotionRequest;
use App\Models\benefitPromotion;
use App\Models\Promotion;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use PhpParser\Node\Stmt\TryCatch;

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
    public function update(UpdatePromotionRequest $request, $slug)
    {

        $promotion = Promotion::where('slug', $slug)->firstOrFail();

        DB::transaction(function () use ($request, $promotion) {

            try{
                $validated = $request->validated();

                if ($request->hasFile('thumbnail')) {
                    $thumbnailPath = $request->file('thumbnail')->store('thumbnails', 'public');
                    $validated['thumbnail'] = $thumbnailPath;
                }

                $promotion->update($validated);

                foreach ($validated['benefits'] as $key => $value) {
                    $benefit = benefitPromotion::find($key);
                    if ($benefit) {
                        $benefit->name = $value;
                        $benefit->save();
                    }
                }

                // Tambahkan misi baru
                if (isset($validated['benefit'])) {
                    foreach ($validated['benefit'] as $key => $value) {
                        $newPromotion = new benefitPromotion();
                        $newPromotion->promotion_id = $promotion['id'];
                        $newPromotion->name = $value;
                        $newPromotion->save();
                    }
                }
            }catch(Exception $e){
                DB::rollBack();

                return redirect()->route('admin.promotion.index')->with('error', 'Failed to delete. Please try again later.');
            }
        });

        return redirect()->route('admin.promotion.index')->with('success', 'Data created successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug)
    {
        $promotion = Promotion::where('slug', $slug)->firstOrFail();
        $benefits = benefitPromotion::where('promotion_id', $promotion['id'])->get();

        DB::beginTransaction();

        try {
            $promotion->delete();
            //delete all benefit promotion related with this promotion
            foreach ($benefits as $benefit) {
                $benefit->delete();
            }

            //delete all image related with this promotion
            if($promotion->thumbnail){
                Storage::delete('public/thumbnails/'. $promotion->thumbnail);
            }

            DB::commit();

            return redirect()->route('admin.promotion.index')->with('success', 'Data deleted successfully');
        } catch (\Exception $e) {
            DB::rollBack();

            return redirect()->route('admin.promotion.index')->with('error', 'Failed to delete Data. Please try again later.');
        }
    }
}