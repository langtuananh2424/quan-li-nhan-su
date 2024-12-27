<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\NHANVIEN;

class LUONG extends Model
{
    protected $table = 'LUONG';
    protected $primaryKey = 'BACLUONG';
    protected $fillable = [
        'LUONGCB',
        'HSLUONG',
        'HSPHUCAP',
    ];

    public function nhanVienofBacLuong() {
        return $this->hasMany(NHANVIEN::class, 'BACLUONG', 'BACLUONG');
    }
}
