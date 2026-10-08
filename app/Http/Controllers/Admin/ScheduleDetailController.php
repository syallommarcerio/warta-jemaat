<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Schedule;
use App\Models\ScheduleDetail;
use App\Models\ServiceRole;
use App\Models\Servant;

class ScheduleDetailController extends Controller
{
    public function index(Schedule $schedule)
    {
        $serviceRoles = ServiceRole::orderBy('name')->get();

        $details = ScheduleDetail::with([
            'serviceRole',
            'servant'
        ])
            ->where('schedule_id', $schedule->id)
            ->get();

        return view('admin.schedule-details.index', compact(
            'schedule',
            'serviceRoles',
            'details'
        ));
    }

    public function store(Request $request, Schedule $schedule)
    {
        $request->validate([
            'service_role_id' => 'required|exists:service_roles,id',
            'servant_name' => 'required|string|max:255',
        ]);

        $servantName = trim($request->servant_name);

        /*
         * Kalau nama pelayan sudah ada,
         * gunakan data yang sudah ada.
         *
         * Kalau belum ada,
         * otomatis buat data pelayan baru.
         */
        $servant = Servant::firstOrCreate([
            'name' => $servantName
        ]);

        /*
         * Cek apakah orang dengan jabatan yang sama
         * sudah ditambahkan ke jadwal ini.
         */
        $exists = ScheduleDetail::where('schedule_id', $schedule->id)
            ->where('service_role_id', $request->service_role_id)
            ->where('servant_id', $servant->id)
            ->exists();

        if ($exists) {
            return redirect()
                ->route('schedule-details.index', $schedule)
                ->with('error', 'Pelayan tersebut sudah ditambahkan pada jadwal ini.');
        }

        ScheduleDetail::create([
            'schedule_id' => $schedule->id,
            'service_role_id' => $request->service_role_id,
            'servant_id' => $servant->id,
        ]);

        return redirect()
            ->route('schedule-details.index', $schedule)
            ->with('success', 'Pelayan berhasil ditambahkan.');
    }

    public function destroy(Schedule $schedule, ScheduleDetail $detail)
    {
        $detail->delete();

        return redirect()
            ->route('schedule-details.index', $schedule)
            ->with('success', 'Pelayan berhasil dihapus.');
    }
}