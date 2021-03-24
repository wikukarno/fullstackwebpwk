<?php

namespace App\Http\Controllers;

use App\Models\Admin\Galleries;
use App\Models\Admin\News;
use App\Models\Admin\Slider;
use App\Models\Admin\Statistic;
use App\Models\Admin\Video;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(Request $request)
    {
        $news = News::all();
        $gallery = Galleries::all();
        $video = Video::all();
        $slider = Slider::all();
        return view('home', [
            'newses' => $news,
            'galleries' => $gallery,
            'videos' => $video,
            'sliders' => $slider,
        ]);
    }
}
