<?php

namespace App\Http\Controllers;

use App\Models\LUONG;
use Illuminate\Http\Request;

class LuongController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $luongs = Luong::all();
        return view('luongs.index', compact('luongs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('luongs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'LUONGCB' => 'required',
            'HSLUONG' => 'required',
            'HSPHUCAP' => 'required'
        ]);
        LUONG::create($request->all());
        return redirect()->route('luongs.index');
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
        $luong = LUONG::find($id);
        return view('luongs.edit', compact('luong'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'LUONGCB' => 'required',
            'HSLUONG' => 'required',
            'HSPHUCAP' => 'required'
        ]);
        LUONG::find($id)->update($request->all());
        return redirect()->route('luongs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        LUONG::destroy($id);
        return redirect()->route('luongs.index');
    }
}
