<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\NHANVIEN;

class TRINHDOHOCVAN extends Model
{
    protected $table = 'TRINHDOHOCVAN';
    protected $primaryKey = 'MATDHV';
    protected $fillable = [
        'TENTDHV',
        'CHUYENNGANH',
    ];

    public function TDHVofNV() {
        return $this->hasMany(NHANVIEN::class, 'MATDHV', 'MATDHV');
    }
}
