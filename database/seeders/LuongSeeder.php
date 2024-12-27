<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\LUONG;

class LuongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LUONG::insert([
            ['LUONGCB' => 4000000, 'HSLUONG' => 2.5, 'HSPHUCAP' => 0.1],
            ['LUONGCB' => 5000000, 'HSLUONG' => 3, 'HSPHUCAP' => 0.15],
            ['LUONGCB' => 8000000, 'HSLUONG' => 3, 'HSPHUCAP' => 0.2],
            ['LUONGCB' => 10000000, 'HSLUONG' => 3, 'HSPHUCAP' => 0.2],
        ]);
    }
}
