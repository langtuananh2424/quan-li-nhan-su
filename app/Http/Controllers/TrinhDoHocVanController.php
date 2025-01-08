<?php

namespace App\Http\Controllers;

use App\Models\TRINHDOHOCVAN;
use Illuminate\Http\Request;

class TrinhDoHocVanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tdhvs = TRINHDOHOCVAN::all();
        return view('trinhdohocvans.index', compact('tdhvs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('trinhdohocvans.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'TENTDHV' => 'required',
            'CHUYENNGANH' => 'nullable',
        ]);
        TRINHDOHOCVAN::create($request->all());
        return redirect()->route('trinhdohocvans.index');
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
        $tdhv = TRINHDOHOCVAN::find($id);
        return view('trinhdohocvans.edit', compact('tdhv'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'TENTDHV' => 'required',
            'CHUYENNGANH' => 'nullable',
        ]);
        TRINHDOHOCVAN::find($id)->update($request->all());
        return redirect()->route('trinhdohocvans.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        TRINHDOHOCVAN::destroy($id);
        return redirect()->route('trinhdohocvans.index');
    }
}
