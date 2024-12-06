<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTeacherRequest;
use App\Http\Requests\UpdateTeacherRequest;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::orderByDesc('id')->get();

        return view('admin.teacher.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTeacherRequest $request)
    {
        DB::Transaction(function () use ($request) {
            $validated = $request->validated();

            if ($request->hasFile('thumbnail')) {
                $thumbnailPath = $request->file('thumbnail')->store('thumbnails', 'public');
                $validated['thumbnail'] = $thumbnailPath;
            }

            $validated['slug'] = Str::slug($validated['name']);

            $teacher = Teacher::create($validated);
        });
        return redirect()->route('admin.teacher.index')->with('success', 'Teacher created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug)
    {
        $teacher = Teacher::where('slug', $slug)->firstOrFail();
        return view('admin.teacher.edit', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTeacherRequest $request, $slug)
    {
        $category = Teacher::where('slug', $slug)->firstOrFail();

        DB::transaction(function () use ($request, $category) {

            $validated = $request->validated();

            if ($request->hasFile('thumbnail')) {
                $thumbnailPath = $request->file('thumbnail')->store('thumbnails', 'public');
                $validated['thumbnail'] = $thumbnailPath;
            }

            $validated['slug'] = Str::slug($validated['name']);

            $category->update($validated);
        });

        return redirect()->route('admin.teacher.index')->with('success', 'Teacher edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug)
    {
        $teacher = Teacher::where('slug', $slug)->firstOrFail();
        DB::beginTransaction();

        try {
            $teacher->delete();
            DB::commit();

            return redirect()->route('admin.teacher.index')->with('success', 'Teacher deleted successfully');
        } catch (\Exception $e) {
            DB::rollBack();

            return redirect()->route('admin.teacher.index')->with('error', 'Failed to delete Teacher. Please try again later.');
        }
    }
}