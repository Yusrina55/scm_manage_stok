<?php

namespace App\Http\Controllers;

use App\Models\LogMasuk;
use App\Models\Produk;
use Illuminate\Http\Request;

class LogMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $logMasuks = LogMasuk::with('produk')->get(); 
        return view('logmasuk.index', compact('logMasuks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $produkList = Produk::all();
        return view('logmasuk.create', compact('produkList'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validasi
        $validatedData = $request->validate([
            'kuantitas_masuk' => 'required',
            'harga_supplier' => 'required',
            'tanggal_masuk' => 'required',
            'produk_id' => 'required|exists:produks,id'
        ]);

        // simpan data
        LogMasuk::create($validatedData);

        // redirect logmasuk index
        return redirect()->route('logmasuk.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(LogMasuk $logmasuk)
    {
        return view('logmasuk.show', compact('logmasuk'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LogMasuk $logmasuk)
    {
        $produkList = Produk::all(); 
        return view('logmasuk.edit', compact('logmasuk', 'produkList'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LogMasuk $logmasuk)
    {
        $validatedData = $request->validate([
            'kuantitas_masuk' => 'required',
            'harga_supplier' => 'required',
            'tanggal_masuk' => 'required',
            'produk_id' => 'required|exists:produks,id'
        ]);

        // update data
        $logmasuk->update($validatedData);

        // redirect logmasuk index
        return redirect()->route('logmasuk.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LogMasuk $logmasuk)
    {
        $logmasuk->delete();

        // redirect logmasuk index
        return redirect()->route('logmasuk.index');
    }
}
