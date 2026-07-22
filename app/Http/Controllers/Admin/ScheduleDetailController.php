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

        $servants = Servant::orderBy('name')->get();

        $details = ScheduleDetail::with(['serviceRole', 'servant'])
            ->where('schedule_id', $schedule->id)
            ->get();

        return view('admin.schedule-details.index', compact(
            'schedule',
            'serviceRoles',
            'servants',
            'details'
        ));
    }
    public function store(Request $request, Schedule $schedule)
    {
        $request->validate([
            'service_role_id' => 'required|exists:service_roles,id',
            'servant_id' => 'required|exists:servants,id',
        ]);
        $exists = ScheduleDetail::where('schedule_id', $schedule->id)
            ->where('service_role_id', $request->service_role_id)
            ->where('servant_id', $request->servant_id)
            ->exists();

        if ($exists) {
            return redirect()
                ->route('schedule-details.index', $schedule)
                ->with('error', 'Pelayan sudah ditambahkan pada jadwal ini.');
        }
        ScheduleDetail::create([
            'schedule_id' => $schedule->id,
            'service_role_id' => $request->service_role_id,
            'servant_id' => $request->servant_id,
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