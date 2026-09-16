<?php

namespace App\Http\Controllers;

use App\Models\Schedule;

class ScheduleController extends Controller
{
    public function index()
    {
        $schedules = Schedule::with([
            'activity',
            'details.serviceRole',
            'details.servant'
        ])
        ->whereDate('date', '>=', now()->toDateString())
        ->orderBy('date')
        ->orderBy('time')
        ->get();

        return view('jadwal', compact('schedules'));
    }

    public function show(Schedule $schedule)
    {
        $schedule->load([
            'activity',
            'details.serviceRole',
            'details.servant'
        ]);

        return view('schedule-detail', compact('schedule'));
    }
}