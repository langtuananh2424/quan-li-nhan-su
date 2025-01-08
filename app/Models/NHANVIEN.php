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
        'BACLUONG',
        'avatar'
    ];

    public function phongban() {
        return $this->belongsTo(PHONGBAN::class, 'MAPB');
    }

    public function chucvu() {
        return $this->hasMany(CHUCVU::class, 'MACV');
    }

    public function luong() {
        return $this->hasOne(LUONG::class, 'BACLUONG');
    }

    public function trinhdohocvan() {
        return $this->belongsTo(TRINHDOHOCVAN::class, 'MATDHV');
    }

    public function hdld() {
        return $this->hasMany(HDLD::class, 'MANV');
    }

    public function getTongLuongAttribute()
    {
        $hopDongHienHanh = $this->hdld()->where('NGAYKT', '>=', now())->first();
        if ($hopDongHienHanh) {
            return $this->luong->where('MAHD', $hopDongHienHanh->id)->sum('LUONGCB') + $this->luongs->where('MAHD', $hopDongHienHanh->id)->sum('phu_cap');
        }
        return 0;
    }
}
