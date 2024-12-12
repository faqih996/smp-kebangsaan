<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::orderByDesc('id')->get();

        return view('admin.article.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();

        return view('admin.article.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArticleRequest $request)
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

            $article = Article::create($validated);
        });
        return redirect()->route('admin.article.index')->with('success', 'Article created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug)
    {
        $categories = Category::all();

        $article = Article::where('slug', $slug)->firstOrFail();

        return view('admin.article.edit', compact('article', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArticleRequest $request, $slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();

        DB::transaction(function () use ($request, $article) {

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

            $article->update($validated);
        });

        return redirect()->route('admin.article.index')->with('success', 'Article updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();

        try {
            $article->delete();
            //delete all benefit promotion related with this promotion
            //delete all image related with this promotion
            if ($article->thumbnail) {
                Storage::delete('/thumbnails' . $article->thumbnail);
            }

            DB::commit();

            return redirect()->route('admin.article.index')->with('success', 'Data deleted successfully');
        } catch (\Exception $e) {
            DB::rollBack();

            return redirect()->route('admin.article.index')->with('error', 'Failed to delete Data. Please try again later.');
        }
    }
}