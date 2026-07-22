<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Announcement;
use App\Models\Schedule;
use App\Models\Servant;
use App\Models\Activity;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'totalSchedules' => Schedule::count(),
            'totalServants' => Servant::count(),
            'totalAnnouncements' => Announcement::count(),
            'totalActivities' => Activity::count(),
        ]);
    }
}