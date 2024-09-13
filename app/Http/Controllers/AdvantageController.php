<?php

namespace App\Http\Controllers;

use App\Models\Advantage;
use App\Models\TitleWebsite;
use Illuminate\Http\Request;

class AdvantageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $advantages = Advantage::orderByDesc('id')->get();
        return view('admin.galleries.index', compact('advantages'));
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
            'title' => 'required|string',
            'description' => 'required|string',
        ]);

        // Save application to the database
        Advantage::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        // return redirect()->back()->with('success', 'Your message has been successfully sent!');
        return redirect()->route('admin.galleries.index')->with('success', 'Congrats! You successfully added new title.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Advantage $advantage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Advantage $advantage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
        ]);

        // Find the advantage by ID
        $advantage = Advantage::findOrFail($id);

        // Update the data
        $advantage->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        // Redirect back with success message
        return redirect()->route('admin.galleries.index')->with('success', 'Congrats! You successfully updated the title.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Advantage $advantage)
    {
        //
    }
}
