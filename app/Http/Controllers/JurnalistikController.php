<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JurnalistikController extends Controller
{
    public function index()
    {
        return view('pages.penelitian.jurnalistik');
    }
}
