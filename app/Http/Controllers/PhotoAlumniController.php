<?php

namespace App\Http\Controllers;

use App\Models\Admin\Graduation;
use Illuminate\Http\Request;

class PhotoAlumniController extends Controller
{
    public function index(Request $request)
    {
        $graduation = Graduation::all();
        return view('pages.alumni.photo', [
            'graduations' => $graduation
        ]);
    }
}
