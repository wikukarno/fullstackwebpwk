<?php

namespace App\Http\Controllers\About;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VisimisiController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.about.visimisi');
    }
}
