<?php

namespace App\Http\Controllers;

use App\AdvanceGallery;
use App\AdvanceText;
use App\BasicGallery;
use App\BasicText;
use App\HomeGallery;
use App\HomeText;
use App\ProfMain;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $prof = ProfMain::get();
        $front = HomeText::find(1);
        $frontGallery = HomeGallery::get();
        return view('front.home', compact('prof','front', 'frontGallery'));
    }


    public function basic()
    {
        $basicText = BasicText::find(1);
        $basicGallery = BasicGallery::get();

        return view('front.basic', compact('basicText','basicGallery'));
    }

    public function advance()
    {
        $advanceText = AdvanceText::find(1);
        $advanceGallery = AdvanceGallery::get();

        return view('front.advance', compact('advanceText','advanceGallery'));
    }

    public function prijava()
    {
        return view('front.prijava');
    }

    public function prof()
    {
        $prof = ProfMain::get();

        return view('front.prof',compact('prof'));
    }

    public function profOne($slug)
    {
        $profOne = ProfMain::whereSlug($slug)->first();
        $prof = ProfMain::get();

        return view('front.prof-one',compact('profOne','prof'));
    }
}
