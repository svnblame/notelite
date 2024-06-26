<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notes = auth()->user()->notes()->latest('updated_at')->paginate(3);

        return view('notes.index')->with('notes', $notes)  ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('notes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedAttributes = $request->validate([
            'title' => 'required|min:1|max:120',
            'body' => 'required',
        ]);

        auth()->user()->notes()->create($validatedAttributes);

        return redirect('/notes');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
