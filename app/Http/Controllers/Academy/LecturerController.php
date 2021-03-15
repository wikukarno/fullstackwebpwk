<?php

namespace App\Http\Controllers\Academy;

use App\Http\Controllers\Controller;
use App\Models\Admin\Teacher;
use Illuminate\Http\Request;

class LecturerController extends Controller
{
    public function index(Request $request)
    {
        $teacher = Teacher::all();
        return view('pages.academy.lecturer', [
            'teachers' => $teacher
        ]);
    }
}
