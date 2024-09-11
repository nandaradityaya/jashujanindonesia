<?php

namespace App\Http\Controllers;

use App\Models\TitleWebsite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TitleWebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $titleWebsites = TitleWebsite::orderByDesc('id')->get();
        return view('admin.galleries.index', compact('titleWebsites'));
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
            'name' => 'required|string',
        ]);

        // Save application to the database
        TitleWebsite::create([
            'name' => $request->name,
        ]);

        // return redirect()->back()->with('success', 'Your message has been successfully sent!');
        return redirect()->route('admin.galleries.index')->with('success', 'Congrats! You successfully added new title.');
    }

    /**
     * Display the specified resource.
     */
    public function show(TitleWebsite $titleWebsite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TitleWebsite $titleWebsite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TitleWebsite $titleWebsite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TitleWebsite $titleWebsite)
    {
        //
    }
}
