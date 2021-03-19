<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RpsController extends Controller
{
    public function index()
    {
        return view('pages.akademik.rps');
    }
}
