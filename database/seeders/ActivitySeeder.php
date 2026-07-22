<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Activity;

class ActivitySeeder extends Seeder
{
    public function run(): void
    {
        $activities = [
            'Ibadah Minggu',
            'Doa Puasa',
            'PA Wanita',
            'KTB',
            'PA Pemuda',
            'Sekolah Minggu',
            'Persekutuan Senior',
        ];

        foreach ($activities as $activity) {
            Activity::create([
                'name' => $activity,
                'is_active' => true,
            ]);
        }
    }
}