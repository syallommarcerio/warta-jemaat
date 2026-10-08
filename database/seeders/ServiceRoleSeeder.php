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

            // Role tambahan
            'Singer',
            'Pelayan Persembahan',
            'Keamanan',
            'Doa Tanggapan Firman',
            'Pembawa Alkitab',
        ];

        foreach ($roles as $role) {
            ServiceRole::updateOrCreate(
                ['name' => $role],
                ['is_active' => true]
            );
        }
    }
}