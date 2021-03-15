<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Galleries;
use Illuminate\Http\Request;
use App\Models\Admin\News;
use App\Models\Admin\Statistic;
use App\Models\Admin\Teacher;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        return view('pages.admin.dashboard', [
            'news' => News::count(),
            'statistic' => Statistic::count(),
            'teacher' => Teacher::count(),
            'gallery' => Galleries::count(),
        ]);
    }
}
