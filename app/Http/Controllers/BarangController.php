<?php

namespace App\Http\Controllers;

use App\Models\barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // return Barang::all();
        $barang = Barang::all();
        return response()->json(['message'=> 'Succes','database'=>$barang]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storstok.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $barang = new Barang;
        $barang ->kode_barang = $request->kode_barang;
        $barang ->nama_barang = $request->nama_barang;
        $barang ->stok = $request->stok;
        $barang->save();

        return response()->json([
            'kode_barang'=> $barang->kode_barang,
            'nama_barang'=> $barang->nama_barang,
            'stok'=> $barang->stok,
            'result'=> 'Data berhasil dibuat'

        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit(barang $barang)
    {
        //
    }

    /**
     * Update the specified resource in storstok.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $kode_barang = $request->kode_barang;
        $nama_barang = $request->nama_barang;
        $stok = $request->stok;

        $barang = Barang::find($id);
        $barang->kode_barang = $kode_barang;
        $barang->nama_barang = $nama_barang;
        $barang->stok = $stok;
        $barang->save();

        return response()->json([
            'kode_barang' => $barang->kode_barang,
            'nama_barang' => $barang->nama_barang,
            'stok' => $barang->stok,
            'result' => 'Data berhasil diupdate'
        ]);
    }

    /**
     * Remove the specified resource from storstok.
     *
     * @param  \App\Models\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $barang = Barang::find($id);
        $barang-> delete();

        return response()->json([
            'result' =>  'Data berhasil dihapus'
        ]);
    }
}
