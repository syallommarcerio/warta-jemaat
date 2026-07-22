<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ServiceRole;

class ServiceRoleSeeder extends Seeder
{
    public function run(): void
    {
        $roles = [
            'Pengkhotbah',
            'Liturgos',
            'Musik',
            'LCD',
            'Sound System',
            'Penerima Tamu',
            'Doa Pembuka',
            'Doa Penutup',
        ];

        foreach ($roles as $role) {
            ServiceRole::create([
                'name' => $role,
                'is_active' => true,
            ]);
        }
    }
}