<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mails = Contact::orderByDesc('id')->get();

        return view('admin.mail.index', compact('mails'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.mail.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMailRequest $request)
    {
        DB::Transaction(function () use ($request) {
            $validated = $request->validated();

            $validated['slug'] = Str::slug($validated['subject']);

            $socialmedia = Contact::create($validated);
        });
        return redirect()->route('admin.socialmedia.index')->with('success', 'Social Media created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
