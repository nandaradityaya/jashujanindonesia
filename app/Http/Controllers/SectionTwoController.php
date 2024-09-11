<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSectionTwoRequest;
use App\Models\SectionTwo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SectionTwoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sectionTwos = SectionTwo::orderByDesc('id')->get();
        return view('admin.galleries.index', compact('sectionTwos'));
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
    public function store(StoreSectionTwoRequest $request)
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

            $gallery = SectionTwo::create($validated); 

        });

        return redirect()->route('admin.galleries.index')->with('success', 'Congrats! You successfully added new image.');
    }

    /**
     * Display the specified resource.
     */
    public function show(SectionTwo $sectionTwo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SectionTwo $sectionTwo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SectionTwo $sectionTwo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SectionTwo $sectionTwo)
    {
        //
    }
}
