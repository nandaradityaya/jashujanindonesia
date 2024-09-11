<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGalleryRequest;
use App\Http\Requests\UpdateGalleryRequest;
use App\Models\Gallery;
use App\Models\TitleWebsite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Advantage;
use App\Models\SectionFive;
use App\Models\SectionFour;
use App\Models\SectionThree;
use App\Models\SectionTwo;
use App\Models\Tagline;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries = Gallery::orderBy('id')->get();
        $taglines = Tagline::orderBy('id')->get();
        $titleWebsites = TitleWebsite::orderBy('id')->get();
        $advantages = Advantage::orderBy('id')->get();
        $sectionTwos = SectionTwo::orderBy('id')->get();
        $sectionThrees = SectionThree::orderBy('id')->get();
        $sectionFours = SectionFour::orderBy('id')->get();
        $sectionFives = SectionFive::orderBy('id')->get();
        return view('admin.galleries.index', compact(['galleries', 'titleWebsites', 'advantages', 'taglines', 'sectionTwos', 'sectionThrees', 'sectionFours', 'sectionFives',]));
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
    public function store(StoreGalleryRequest $request)
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


        

            $gallery = Gallery::create($validated); 

        });

        return redirect()->route('admin.galleries.index')->with('success', 'Congrats! You successfully added new image.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UpdateGalleryRequest $request, Gallery $gallery)
    {
        DB::transaction(function () use ($request, $gallery){

            
            $validated = $request->validated();

            if($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('images', 'public'); 
                $validated['image'] = $imagePath; 
            } else {
                $imagePath = 'images/image-default.png'; 
            }



            $validated['slug'] = Str::slug($validated['title']);

            $gallery->update($validated); 
        });

        return redirect()->route('admin.galleries.index')->with('success', 'Congrats! You successfully edit image.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        //
    }
}
