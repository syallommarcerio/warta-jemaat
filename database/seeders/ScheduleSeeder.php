<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Schedule;

class ScheduleSeeder extends Seeder
{
    public function run(): void
    {
        Schedule::create([
            'activity_id' => 1,
            'date' => '2026-07-05',
            'time' => '07:00:00',
            'location' => 'GKMI Winong',
            'theme' => 'Ibadah Minggu',
        ]);

        Schedule::create([
            'activity_id' => 1,
            'date' => '2026-07-12',
            'time' => '07:00:00',
            'location' => 'GKMI Winong',
            'theme' => 'Ibadah Minggu',
        ]);

        Schedule::create([
            'activity_id' => 1,
            'date' => '2026-07-19',
            'time' => '07:00:00',
            'location' => 'GKMI Winong',
            'theme' => 'Ibadah Minggu',
        ]);

        Schedule::create([
            'activity_id' => 1,
            'date' => '2026-07-26',
            'time' => '07:00:00',
            'location' => 'GKMI Winong',
            'theme' => 'Ibadah Minggu',
        ]);
    }
}