<?php

namespace App\Http\Controllers\Academy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StructureController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.academy.structure');
    }
}
