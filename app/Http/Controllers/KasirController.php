<?php

namespace App\Http\Controllers;

use App\Models\Kasir;
use Illuminate\Http\Request;

class KasirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allTransaksi = Kasir::all();
        return view('kasir.index', compact('allTransaksi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kasir.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validasi
        $validatedData = $request->validate([
            'tanggal_transaksi' => 'required|date',
            'total' => 'required',
        ]);

        // simpan data
        Kasir::create($validatedData);

        // redirect transaksi index
        return redirect()->route('kasir.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kasir $kasir)
    {
        return view('kasir.show', compact('kasir'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kasir $kasir)
    {
        return view('kasir.edit', compact('kasir'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kasir $kasir)
    {
        $validatedData = $request->validate([
            'tanggal_transaksi' => 'required|date',
            'total' => 'required',
        ]);

        // update data
        $kasir->update($validatedData);

        // redirect transaksi index
        return redirect()->route('kasir.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kasir $kasir)
    {
        $kasir->delete();

        return redirect()->route('kasir.index');
    }
}
