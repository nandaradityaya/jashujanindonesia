<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSectionFourRequest;
use App\Http\Requests\UpdateSectionFourRequest;
use App\Models\SectionFour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SectionFourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sectionFours = SectionFour::orderByDesc('id')->get();
        return view('admin.galleries.index', compact('sectionFours'));
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
    public function store(StoreSectionFourRequest $request)
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

            $gallery = SectionFour::create($validated); 

        });

        return redirect()->route('admin.galleries.index')->with('success', 'Congrats! You successfully added new image.');
    }

    /**
     * Display the specified resource.
     */
    public function show(SectionFour $sectionFour)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SectionFour $sectionFour)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSectionFourRequest $request, SectionFour $sectionFour)
    {
        DB::transaction(function () use ($request, $sectionFour){

            
            $validated = $request->validated();

            if($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('images', 'public'); 
                $validated['image'] = $imagePath; 
            } else {
                $imagePath = 'images/image-default.png'; 
            }


            $sectionFour->update($validated); 
        });

        return redirect()->route('admin.galleries.index')->with('success', 'Congrats! You successfully edit image.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SectionFour $sectionFour)
    {
        //
    }
}
