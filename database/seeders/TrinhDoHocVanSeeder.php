<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TRINHDOHOCVAN;

class TrinhDoHocVanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TRINHDOHOCVAN::insert([
            ['TENTDHV' => 'Tiểu học'],
            ['TENTDHV' => 'Trung học'],
            ['TENTDHV' => 'Cấp 3'],
            ['TENTDHV' => 'Cao đẳng'],
            ['TENTDHV' => 'Đại học'],
            ['TENTDHV' => 'Thạc sĩ'],
            ['TENTDHV' => 'Tiến sĩ'],
        ]);
    }
}
