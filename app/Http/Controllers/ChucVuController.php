<?php

namespace App\Http\Controllers;

use App\Models\CHUCVU;
use Illuminate\Http\Request;

class ChucVuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $chucvus = ChucVu::all();
        return view('chucvus.index', compact('chucvus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('chucvus.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'TENCV' => 'required',
        ]);
        CHUCVU::create($request->all());
        return redirect()->route('chucvus.index');
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
        $chucvu = CHUCVU::find($id);
        return view('chucvus.edit', compact('chucvu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'TENCV' => 'required',
        ]);
        CHUCVU::find($id)->update($request->all());
        return redirect()->route('chucvus.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        CHUCVU::destroy($id);
        return redirect()->route('chucvus.index');
    }
}
