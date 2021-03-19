<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SapController extends Controller
{
    public function index()
    {
        return view('pages.akademik.sap');
    }
}
