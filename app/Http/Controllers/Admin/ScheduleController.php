<?php

namespace App\Http\Controllers\Admin;
use App\Models\Activity;
use App\Http\Requests\StoreScheduleRequest;
use App\Http\Requests\UpdateScheduleRequest;
use App\Http\Controllers\Controller;
use App\Models\Schedule;


class ScheduleController extends Controller
{
    public function index()
    {
        $schedules = Schedule::with('activity')
            ->orderBy('date')
            ->get();

        return view('admin.schedules.index', compact('schedules'));
    }

    public function create()
    {
        $activities = Activity::where('is_active', 1)
            ->orderBy('name')
            ->get();

        return view('admin.schedules.create', compact('activities'));
    }

    public function store(StoreScheduleRequest $request)
    {
        Schedule::create($request->validated());

        return redirect()
            ->route('schedules.index')
            ->with('success', 'Jadwal berhasil ditambahkan.');
    }
    public function show(string $id)
    {
        //
    }

    public function edit(Schedule $schedule)
    {
        $activities = Activity::where('is_active', 1)
            ->orderBy('name')
            ->get();

        return view('admin.schedules.edit', compact('schedule', 'activities'));
    }

    public function update(UpdateScheduleRequest $request, Schedule $schedule)
    {
        $schedule->update($request->validated());

        return redirect()
            ->route('schedules.index')
            ->with('success', 'Jadwal berhasil diperbarui.');
    }

    public function destroy(Schedule $schedule)
    {
        $schedule->delete();

        return redirect()
            ->route('schedules.index')
            ->with('success', 'Jadwal berhasil dihapus.');
    }
}