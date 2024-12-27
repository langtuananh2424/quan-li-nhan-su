<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CHUCVU;

class ChucVuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CHUCVU::insert([
            ['TENCV' => 'Giám Đốc'],
            ['TENCV' => 'Phó Giám Đốc'],
            ['TENCV' => 'Trưởng Phòng'],
            ['TENCV' => 'Quản Lí'],
            ['TENCV' => 'Nhân Viên'],
        ]);
    }
}
