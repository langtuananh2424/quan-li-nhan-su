<?php

namespace App\Http\Controllers;

use App\Models\NHANVIEN;
use Illuminate\Http\Request;
use App\Models\PHONGBAN;
use App\Models\TRINHDOHOCVAN;
use App\Models\CHUCVU;

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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
