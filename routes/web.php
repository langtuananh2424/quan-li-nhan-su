<?php

use App\Http\Controllers\NhanVienController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('nhanviens', NhanVienController::class);
Route::resource('hdlds', 'HDLDController');
Route::resource('phongbans', 'PhongBanController');
Route::resource('chucvus', 'ChucVuController');
Route::resource('trinhdohocvans', 'TrinhDoHocVanController');
Route::resource('luongs', 'LuongController');
