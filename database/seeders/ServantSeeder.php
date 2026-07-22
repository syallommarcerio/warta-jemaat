<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Servant;

class ServantSeeder extends Seeder
{
    public function run(): void
    {
        $servants = [
            'Pdt. Didik H',
            'Ibu Ani Widjaya',
            'Sdr. Yosia',
            'P. Didik',
            'B. Yulita',
            'B. Sucini',
            'B. Ana',
            'B. Dyah',
            'B. Erna',
            'B. King Langse',
            'B. Tinuk',
            'B. Pipin',
            'B. Wida',
            'B. Intan',
            'B. Hani',
            'B. Ari',
            'P. Gigih',
            'Gilbert',
            'Tata',
            'Nia',
            'Excel',
            'Holy',
            'Yosia',
            'Andi',
            'Band',
            'Gio',
            'Fani',
            'Sheren',
            'Nino',
            'Ano',
            'P. Stef',
            'B. Endang',
            'B. Dien',
            'B. Eka',
            'B. Eko',
            'P. Lilik',
            'P. Aan',
            'B. Yun',
            'P. Subiyono',
            'P. Handoko',
            'P. Wig',
            'P. Teguh P',
            'P. Apri',
            'P. Tono',
        ];

        foreach ($servants as $servant) {
            Servant::create([
                'name' => $servant,
            ]);
        }
    }
}