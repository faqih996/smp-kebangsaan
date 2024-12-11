<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
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
    public function store(StoreContactRequest $request)
    {
        DB::Transaction(function () use ($request) {
            $validated = $request->validated();

            $message = Contact::create($validated);
        });

        return redirect()->route('admin.mail.index')->with('success', 'Data created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $mail = Contact::where('slug', $slug)->firstOrFail();

        return view('admin.mail.show', compact('mail'));
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