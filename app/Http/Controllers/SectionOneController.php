<?php

namespace App\Http\Controllers;

use App\Models\SectionFive;
use App\Models\SectionOne;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SectionOneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sectionOnes = SectionOne::orderByDesc('id')->get();
        return view('admin.galleries.index', compact('sectionOnes'));
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
        DB::transaction(function () use ($request) {
            $validated = $request->validated();

            $validated = $request->validated();

            if($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('images', 'public'); 
                $validated['image'] = $imagePath; 
            } else {
                $imagePath = 'images/image-default.png'; 
            }

            $gallery = SectionOne::create($validated); 

        });

        return redirect()->route('admin.galleries.index')->with('success', 'Congrats! You successfully added new image.');
    }

    /**
     * Display the specified resource.
     */
    public function show(SectionOne $sectionOne)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SectionOne $sectionOne)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SectionOne $sectionOne)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SectionOne $sectionOne)
    {
        //
    }
}
