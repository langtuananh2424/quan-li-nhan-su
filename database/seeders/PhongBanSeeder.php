<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PHONGBAN;

class PhongBanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PHONGBAN::insert([
            ['TENPB' => 'Phòng Kế Toán'],
            ['TENPB' => 'Phòng Hành Chính Nhân Sự'],
            ['TENPB' => 'Phòng Kinh Doanh'],
            ['TENPB' => 'Phòng Marketing'],
            ['TENPB' => 'Phòng IT'],
        ]);
    }
}
