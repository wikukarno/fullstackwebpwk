<?php

namespace App\Http\Controllers\Dosen;

use App\Http\Controllers\Controller;
use App\Models\Admin\Struktur;
use Illuminate\Http\Request;

class StructureController extends Controller
{
    public function index(Request $request)
    {
        $struktur = Struktur::all();
        return view('pages.dosen.structure', [
            'strukturs' => $struktur
        ]);
    }
}
