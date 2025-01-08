<?php

namespace App\Http\Controllers;

use App\Models\HDLD;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HDLDController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hdlds = HDLD::all();
        return view('hdlds.index', compact('hdlds'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('hdlds.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'MANV' => 'required',
            'LOAIHD' => 'required',
            'NGAYBD' => 'required',
        ]);
        HDLD::create($request->all());
        return redirect()->route('hdlds.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $hdld = HDLD::find($id);
        return view('hdlds.edit', compact('hdld'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'MANV' => 'required',
            'LOAIHD' => 'required',
            'NGAYBD' => 'required',
            'NGAYKT' => 'nullable'
        ]);
        HDLD::find($id)->create($request->all());
        return redirect()->route('hdlds.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        HDLD::destroy($id);
        return redirect()->route('hdlds.index');
    }

    public function SoNamLamViec()
    {
        $sonamlamviecs = DB::select('SELECT * FROM vw_SoNamLamViecTungNV');
        return view('hdlds.SoNamLamViec', compact('sonamlamviecs'));
    }

    public function HDLDSapHetHan()
    {
        $hdlds = DB::select('EXEC sp_ReportHDLD_SapHetHan');
        return view('hdlds.HDLDSapHetHan', compact('hdlds'));
    }

    public function ChiTietCacHDLD()
    {
        $hdlds = DB::select('EXEC sp_ReportHDLD_ChiTietCacHDLD');
        return view('hdlds.ChiTietCacHDLD', compact('hdlds'));
    }
}
