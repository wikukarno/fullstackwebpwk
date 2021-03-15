<?php

namespace App\Http\Controllers\About;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SejarahController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.about.sejarah');
    }
}
