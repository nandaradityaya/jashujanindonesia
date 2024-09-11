<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSectionThreeRequest;
use App\Models\SectionThree;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SectionThreeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sectionThrees = SectionThree::orderByDesc('id')->get();
        return view('admin.galleries.index', compact('sectionThrees'));
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
    public function store(StoreSectionThreeRequest $request)
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

            $gallery = SectionThree::create($validated); 

        });

        return redirect()->route('admin.galleries.index')->with('success', 'Congrats! You successfully added new image.');
    }

    /**
     * Display the specified resource.
     */
    public function show(SectionThree $sectionThree)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SectionThree $sectionThree)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SectionThree $sectionThree)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SectionThree $sectionThree)
    {
        //
    }
}
