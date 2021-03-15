<?php

namespace App\Http\Controllers;

use App\Models\Admin\Galleries;
use App\Models\Admin\News;
use App\Models\Admin\Statistic;
use App\Models\Admin\Video;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(Request $request)
    {


        $item = Statistic::all();
        $news = News::all();
        $gallery = Galleries::all();
        $video = Video::all();
        return view('home', [
            'items' => $item,
            'newses' => $news,
            'galleries' => $gallery,
            'videos' => $video,
        ]);
    }
}
