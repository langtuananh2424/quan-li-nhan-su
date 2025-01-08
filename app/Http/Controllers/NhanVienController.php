<?php

namespace App\Http\Controllers;

use App\Models\NHANVIEN;
use Illuminate\Http\Request;
use App\Models\PHONGBAN;
use App\Models\TRINHDOHOCVAN;
use App\Models\CHUCVU;
use Illuminate\Support\Facades\DB;

class NhanVienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nhanviens = NHANVIEN::all();
        return view('nhanviens.index', compact('nhanviens'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $phongbans = PHONGBAN::all();
        $chucvus = CHUCVU::all();
        $tdhvs = TRINHDOHOCVAN::all();
        return view('nhanviens.create', compact('phongbans', 'chucvus', 'tdhvs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'HOTEN' => 'required|string|max:255',
            'NGAYSINH' => 'required|date',
            'GIOITINH' => 'required|in:Nam,Nữ,Khác',
            'DIACHI' => 'required|string',
            'SDT' => 'required|numeric',
            'EMAIL' => 'required|email',
            'MAPB' => 'required|exists:PHONGBAN,MAPB',
            'MACV' => 'required|exists:CHUCVU,MACV',
            'MATDHV' => 'required|exists:TRINHDOHOCVAN,MATDHV',
            'BACLUONG' => 'required|exists:LUONG,BACLUONG',
        ]);
        if($request->hasFile('avatar')) {
          $avatarPath = $request->file('avatar')->store('avatars', 'public');
        } else {
            $avatarPath = null;
        }

        NHANVIEN::create([
            'HOTEN' => $request->HOTEN,
            'NGAYSINH' => $request->NGAYSINH,
            'GIOITINH' => $request->GIOITINH,
            'DIACHI' => $request->DIACHI,
            'SDT' => $request->SDT,
            'EMAIL' => $request->EMAIL,
            'MAPB' => $request->MAPB,
            'MACV' => $request->MACV,
            'MATDHV' => $request->MATDHV,
            'BACLUONG' => $request->BACLUONG,
            'avatar' => $avatarPath,
        ]);

        return redirect()->route('nhanviens.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $nhanvien = NHANVIEN::find($id);
        return view('nhanviens.show', compact('nhanvien'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $nhanvien = NHANVIEN::find($id);
        $chucvus = CHUCVU::all();
        $tdhvs = TRINHDOHOCVAN::all();
        $phongbans = PHONGBAN::all();
        return view('nhanviens.edit', compact('nhanvien', 'chucvus', 'tdhvs', 'phongbans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'HOTEN' => 'required|string|max:255',
            'NGAYSINH' => 'required|date',
            'GIOITINH' => 'required|in:Nam,Nữ,Khác',
            'DIACHI' => 'required|string',
            'SDT' => 'required|numeric',
            'EMAIL' => 'required|email',
            'MAPB' => 'required|exists:PHONGBAN,MAPB',
            'MACV' => 'required|exists:CHUCVU,MACV',
            'MATDHV' => 'required|exists:TRINHDOHOCVAN,MATDHV',
            'BACLUONG' => 'required|exists:LUONG,BACLUONG',
        ]);
        if($request->hasFile('avatar')) {
            $avatarPath = $request->file('avatar')->store('avatars', 'public');
        } else {
            $avatarPath = null;
        }

        NHANVIEN::find($id)->update([
            'HOTEN' => $request->HOTEN,
            'NGAYSINH' => $request->NGAYSINH,
            'GIOITINH' => $request->GIOITINH,
            'DIACHI' => $request->DIACHI,
            'SDT' => $request->SDT,
            'EMAIL' => $request->EMAIL,
            'MAPB' => $request->MAPB,
            'MACV' => $request->MACV,
            'MATDHV' => $request->MATDHV,
            'BACLUONG' => $request->BACLUONG,
            'avatar' => $avatarPath,
        ]);

        return redirect()->route('nhanviens.index')->with('success', 'Update success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        NHANVIEN::destroy($id);
        return redirect()->route('nhanviens.index')->with('success', 'Delete success');
    }

    public function createOrRefreshViewAndRedirect()
    {
        // Kiểm tra xem view đã tồn tại chưa
        try {
            DB::select('SELECT * FROM vw_TongLuong');
        } catch (\Illuminate\Database\QueryException $e) {
            if ($e->getCode() === '42S02') { // Mã lỗi cho view không tồn tại
                // Nếu view không tồn tại, tạo mới
                DB::statement('CREATE VIEW vw_TongLuong AS
                SELECT HOTEN, dbo.fn_TinhTongLuong(BACLUONG) AS TONGLUONG FROM NHANVIEN;');
            }
        }

        // Chuyển hướng
        return redirect()->route('TongLuong.index');
    }

    public function show_nhanvien_chucvu()
    {
        $nhanviens = DB::select('SELECT NHANVIEN.MANV, NHANVIEN.HOTEN, NHANVIEN.NGAYSINH, NHANVIEN.GIOITINH, NHANVIEN.DIACHI, NHANVIEN.SDT, NHANVIEN.EMAIL, CHUCVU.TENCV FROM NHANVIEN INNER JOIN CHUCVU ON NHANVIEN.MACV = CHUCVU.MACV');
        return view('nhanviens.show_nhanvien_chucvu', compact('nhanviens'));
    }

    public function sinhnhat_nv(Request $request)
    {
        $sinhnhat_nv = $request->sinhnhat;
        $nhanviens = NHANVIEN::whereMonth('NGAYSINH', $sinhnhat_nv)->get();
        return view('nhanviens.sinhnhat_nv', compact('nhanviens'));
    }
}
