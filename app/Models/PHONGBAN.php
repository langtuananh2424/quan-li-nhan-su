<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\NHANVIEN;

class PHONGBAN extends Model
{
    protected $table = 'PHONGBAN';
    protected $primaryKey = 'MAPB';
    protected $fillable = [
        'TENPB',
    ];

    public function nhanVienofPB() {
        return $this->hasMany(NHANVIEN::class, 'MAPB', 'MAPB');
    }
}
