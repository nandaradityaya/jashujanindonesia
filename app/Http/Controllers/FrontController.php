<?php

namespace App\Http\Controllers;

use App\Models\Advantage;
use App\Models\Gallery;
use App\Models\SectionFive;
use App\Models\SectionFour;
use App\Models\SectionThree;
use App\Models\SectionTwo;
use App\Models\Tagline;
use App\Models\TitleWebsite;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index () {
        $titleWebsites = TitleWebsite::orderBy('id')->get();
        $advantages = Advantage::orderBy('id')->get();
        $galleries = Gallery::orderBy('id')->get();
        $sectionTwos = SectionTwo::orderBy('id')->get();
        $sectionThrees = SectionThree::orderBy('id')->get();
        $sectionFours = SectionFour::orderBy('id')->get();
        $sectionFives = SectionFive::orderBy('id')->get();
        $taglines = Tagline::orderBy('id')->get();
        return view ('front.index', compact(['galleries', 'titleWebsites', 'advantages', 'taglines', 'sectionTwos', 'sectionThrees', 'sectionFours', 'sectionFives',]));
    }
}
