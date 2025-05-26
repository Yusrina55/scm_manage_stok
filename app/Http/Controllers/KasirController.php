<?php

namespace App\Http\Controllers;

use App\Models\Kasir;
use Illuminate\Http\Request;
use App\Models\DetailKasir;

class KasirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produkList = \App\Models\Produk::all();
        return view('kasir.create', compact('produkList'));
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
        $request->validate([
        'tanggal_transaksi' => 'required|date',
        'produk_id.*' => 'required|exists:produks,id',
        'kuantitas.*' => 'required|integer',
        'harga_satuan.*' => 'required|numeric',
    ]);

    // Hitung total
    $total = 0;
    foreach ($request->kuantitas as $i => $qty) {
        $total += $qty * $request->harga_satuan[$i];
    }

    // Simpan transaksi
    $kasir = Kasir::create([
        'tanggal_transaksi' => $request->tanggal_transaksi,
        'total' => $total,
    ]);

    // Simpan detail transaksi
    foreach ($request->produk_id as $i => $produkId) {
        DetailKasir::create([
            'kasir_id' => $kasir->id,
            'produk_id' => $produkId,
            'kuantitas' => $request->kuantitas[$i],
            'harga_satuan' => $request->harga_satuan[$i],
            'subtotal' => $request->kuantitas[$i] * $request->harga_satuan[$i],
        ]);
    }

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
