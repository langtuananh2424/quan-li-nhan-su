<?php

use App\Http\Controllers\ChucVuController;
use App\Http\Controllers\HDLDController;
use App\Http\Controllers\LuongController;
use App\Http\Controllers\NhanVienController;
use App\Http\Controllers\PhongBanController;
use App\Http\Controllers\TongLuongController;
use App\Http\Controllers\TrinhDoHocVanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.app');
});
// Route NhanVien
Route::get('nhanviens/show_nhanvien_chucvu', [NhanVienController::class, 'show_nhanvien_chucvu'])->name('nhanviens.show_nhanvien_chucvu');
Route::post('nhanviens/sinhnhat_nv', [NhanVienController::class, 'sinhnhat_nv'])->name('nhanviens.sinhnhat_nv');
Route::resource('nhanviens', NhanVienController::class);

// Route HDLD
Route::get('/hdlds/HDLDSapHetHan', [HDLDController::class, 'HDLDSapHetHan'])->name('hdlds.HDLDSapHetHan');
Route::get('/hdlds/ChiTietCacHDLD', [HDLDController::class, 'ChiTietCacHDLD'])->name('hdlds.ChiTietCacHDLD');
Route::get('/hdlds', [HDLDController::class, 'index'])->name('hdlds.index');
Route::get('/hdlds/create', [HDLDController::class, 'create'])->name('hdlds.create');
Route::post('/hdlds', [HDLDController::class, 'store'])->name('hdlds.store');
Route::get('/hdlds/SoNamLamViec', [HDLDController::class, 'SoNamLamViec'])->name('hdlds.SoNamLamViec');
Route::get('/hdlds/{id}', [HDLDController::class, 'show'])->name('hdlds.show');
Route::get('/hdlds/{id}/edit', [HDLDController::class, 'edit'])->name('hdlds.edit');
Route::put('/hdlds/{id}', [HDLDController::class, 'update'])->name('hdlds.update');
Route::delete('/hdlds/{id}', [HDLDController::class, 'destroy'])->name('hdlds.destroy');


Route::resource('phongbans', PHONGBANController::class);
Route::resource('chucvus', ChucVuController::class);
Route::resource('trinhdohocvans', TrinhDoHocVanController::class);
Route::resource('luongs', LUONGController::class);

Route::get('/create-or-refresh-view', [NhanVienController::class, 'createOrRefreshViewAndRedirect'])->name('create-or-refresh-view');
Route::resource('TongLuong', TongLuongController::class);
