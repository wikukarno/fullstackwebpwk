<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin\Kurikulum;

class KurikulumController extends Controller
{
    public function index(Request $request)
    {
        $kurikulum = Kurikulum::all();
        return view('pages.akademik.curriculum', [
            'kurikulums' => $kurikulum
        ]);
    }
}
