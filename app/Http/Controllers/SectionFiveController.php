<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSectionFourRequest;
use App\Http\Requests\UpdateSectionFiveRequest;
use App\Models\SectionFive;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SectionFiveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sectionFives = SectionFive::orderByDesc('id')->get();
        return view('admin.galleries.index', compact('sectionFives'));
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

            $gallery = SectionFive::create($validated); 

        });

        return redirect()->route('admin.galleries.index')->with('success', 'Congrats! You successfully added new image.');
    }

    /**
     * Display the specified resource.
     */
    public function show(SectionFive $sectionFive)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SectionFive $sectionFive)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSectionFiveRequest $request, SectionFive $sectionFive)
    {
        DB::transaction(function () use ($request, $sectionFive){

            
            $validated = $request->validated();

            if($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('images', 'public'); 
                $validated['image'] = $imagePath; 
            } else {
                $imagePath = 'images/image-default.png'; 
            }


            $sectionFive->update($validated); 
        });

        return redirect()->route('admin.galleries.index')->with('success', 'Congrats! You successfully edit image.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SectionFive $sectionFive)
    {
        //
    }
}
