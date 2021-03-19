<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin\News;

class NewsController extends Controller
{
    public function index(Request $request, $slug)
    {
        // $news = News::all();
        // $news = News::all()->where('id', $id);
        // return view('news', [
        //     'newses' => $news
        // ]);
        $news = News::all()->where('slug', $slug);
        return view('news', [
            'newses' => $news
        ]);
    }
}
