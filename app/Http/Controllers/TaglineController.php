<?php

namespace App\Http\Controllers;

use App\Models\Tagline;
use Illuminate\Http\Request;

class TaglineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $taglines = Tagline::orderByDesc('id')->get();
        return view('admin.galleries.index', compact('taglines'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required|string',
        ]);

        // Save application to the database
        Tagline::create([
            'description' => $request->description,
        ]);

        // return redirect()->back()->with('success', 'Your message has been successfully sent!');
        return redirect()->route('admin.galleries.index')->with('success', 'Congrats! You successfully added new title.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tagline $tagline)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tagline $tagline)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tagline $tagline)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tagline $tagline)
    {
        //
    }
}
