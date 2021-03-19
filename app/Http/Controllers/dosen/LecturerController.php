<?php

namespace App\Http\Controllers\Dosen;

use App\Http\Controllers\Controller;
use App\Models\Admin\Teacher;
use Illuminate\Http\Request;

class LecturerController extends Controller
{
    public function index(Request $request)
    {
        $teacher = Teacher::all();
        return view('pages.dosen.lecturer', [
            'teachers' => $teacher
        ]);
    }
}
