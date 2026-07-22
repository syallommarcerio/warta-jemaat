<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Schedule;
use App\Models\Setting;

class HomeController extends Controller
{
    public function index()
    {
        $setting = Setting::first();

        $schedules = Schedule::with([
            'activity',
            'details.serviceRole',
            'details.servant'
        ])
        ->orderBy('date')
        ->take(3)
        ->get();

        $announcements = Announcement::latest()
            ->take(3)
            ->get();

        return view('home', compact(
            'setting',
            'schedules',
            'announcements'
        ));
    }
}