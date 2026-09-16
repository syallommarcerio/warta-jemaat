<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Schedule;

class ScheduleCard extends Component
{
    public Schedule $schedule;

    public bool $terdekat;

    public function __construct(Schedule $schedule, bool $terdekat = false)
    {
        $this->schedule = $schedule;
        $this->terdekat = $terdekat;
    }

    public function render(): View|Closure
    {
        return view('components.schedule-card');
    }
}