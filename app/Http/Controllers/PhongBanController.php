<?php

namespace App\Http\Controllers;

use App\Models\PHONGBAN;
use Illuminate\Http\Request;

class PhongBanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $phongbans = PHONGBAN::all();
        return view('phongbans.index', compact('phongbans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('phongbans.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'TENPB' => 'required'
        ]);

        PHONGBAN::create($request->all());
        return redirect()->route('phongbans.index');
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
        $phongban = PHONGBAN::find($id);
        return view('phongbans.edit', compact('phongban'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'TENPB' => 'required'
        ]);

        PHONGBAN::find($id)->update($request->all());
        return redirect()->route('phongbans.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        PHONGBAN::destroy($id);
    }
}
