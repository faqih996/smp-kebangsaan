<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVisionRequest;
use App\Http\Requests\UpdateVisionRequest;
use App\Models\Mision;
use App\Models\Vision;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class VisionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vision = Vision::first();
        $missions = Mision::orderBy('id', 'asc')->get();

        return view('admin.visimisi.index', compact('vision', 'missions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.visimisi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVisionRequest $request)
    {
        // dd($request->all());

        // Start a database transaction
        DB::transaction(function () use ($request) {
            // Validate and retrieve the data from the request
            $validatedData = $request->validated();

            // Create the Vision instance
            $vision = Vision::create($validatedData);

            // Prepare missions for mass assignment
            $missions = array_map(function ($missionName) use ($vision) {
                return [
                    'vision_id' => $vision->id,  // Ensure the vision_id is set correctly
                    'name' => $missionName,
                ];
            }, $validatedData['mission']);  // Access 'mission' from the validated request data

            // Insert missions in bulk
            Mision::insert($missions);
        });

        // Redirect with success message
        return redirect()->route('admin.vision-mission.index')->with('success', 'Visi Misi created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $vision = Vision::findOrFail($id);
        $mission = Mision::where('vision_id', $vision['id'])->get();

        // dd($mission);

        return view('admin.visimisi.edit', compact('vision', 'mission'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVisionRequest $request, Vision $vision, $id)
    {
        // Start a database transaction
        DB::transaction(function () use ($request, $vision, $id) {
            // Validate and retrieve the data from the request
            $validated = $request->validated();

            // Update data Vision
            $vision->update($validated);

            // Update or create data for existing missions (from 'missions')
            foreach ($validated['missions'] as $key => $value) {
                // Find the mission by the given ID
                $missions = Mision::find($key);
                if ($missions) {
                    $missions->name = $value;
                    $missions->save();
                } // Save changes
            }

            // Add new missions (from 'mission') - these do not have an ID and are new
            if (isset($validated['mission'])) {
                foreach ($validated['mission'] as $key => $value) {
                    // Create new mission
                    $mission = new Mision();
                    $mission->vision_id = $id;
                    $mission->name = $value;
                    $mission->save();
                }
            }

        });

        // Redirect with success message
        return redirect()->route('admin.vision-mission.index')->with('success', 'Visi Misi created successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vision $vision)
    {
        //
    }
}