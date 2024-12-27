<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\HDLD;
use App\Models\PHONGBAN;
use App\Models\CHUCVU;
use App\Models\LUONG;
use App\Models\TRINHDOHOCVAN;

class NHANVIEN extends Model
{
    protected $table = 'NHANVIEN';
    protected $primaryKey = 'MANV';
    protected $fillable = [
        'HOTEN',
        'NGAYSINH',
        'GIOITINH',
        'DIACHI',
        'SDT',
        'EMAIL',
        'MAPB',
        'MACV',
        'MATDHV',
        'BACLUONG'
    ];

    public function phongban() {
        return $this->belongsTo(PHONGBAN::class, 'MAPB');
    }

    public function chucvu() {
        return $this->belongsTo(CHUCVU::class, 'MACV');
    }

    public function luong() {
        return $this->belongsTo(LUONG::class, 'BACLUONG');
    }

    public function trinhdohocvan() {
        return $this->hasMany(TRINHDOHOCVAN::class, 'MATDHV');
    }
}
