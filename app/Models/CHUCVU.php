<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\NHANVIEN;

class CHUCVU extends Model
{
    protected $table = 'CHUCVU';
    protected $primaryKey = 'MACV';
    protected $fillable = [
        'TENCV'
    ];

    public function nhanVienofCV()
    {
        return $this->hasMany(NHANVIEN::class, 'MACV', 'MACV');
    }
}
