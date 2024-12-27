<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\NHANVIEN;

class HDLD extends Model
{
    protected $table = 'HDLD';
    protected $primaryKey = 'MAHD';
    protected $fillable = [
        'MANV',
        'LOAIHD',
        'NGAYBD',
        'NGAYKT',
    ];

    public function nhanvien() {
        return $this->hasMany(NHANVIEN::class, 'MANV', 'MANV');
    }
}
