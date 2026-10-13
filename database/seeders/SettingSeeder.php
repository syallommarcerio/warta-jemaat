<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    public function run(): void
    {
        Setting::firstOrCreate(
            ['church_name' => 'GKMI Winong'],
            [
                'address' => 'Winong, Pati, Jawa Tengah',
                'phone' => null,
                'email' => null,
                'facebook' => null,
                'instagram' => null,
                'youtube' => null,
            ]
        );
    }
}
