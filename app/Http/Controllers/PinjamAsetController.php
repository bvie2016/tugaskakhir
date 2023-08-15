<?php

namespace App\Http\Controllers;

use App\Models\Aset;
use App\Models\Jenis;
use App\Models\PinjamAset;
use App\Models\Tipe;
use Illuminate\Http\Request;

class PinjamAsetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = PinjamAset::with('user')->with('aset')->get();
        return view('admin.pinjam.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $aset = Aset::all();
        return view('admin.pinjam.add', compact('aset'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // cari aset berdasarkan id
        $cekAset = Aset::where('id', $request->aset_id)->first();
        // cek tipe dan jenis aset
        $cekJenis = Jenis::where('id', $cekAset->jenis_id)->where('nama', 'like', '%sarana%')->first();
        $cekTipe = Tipe::where('id', $cekAset->tipe_id)->where('nama', 'like', '%habis%')->first();
        // update stok aset jika tipe merupakan habis pakai
        if ($cekJenis && $cekTipe) {
            $cekAset->jumlah = $cekAset->jumlah - $request->jumlah;
            if ($cekAset->jumlah > 0) {
                $cekAset->update();
            }
        }
        // dd($cekAset);
        $simpan = PinjamAset::create([
            'user_id' => auth()->user()->id,
            'aset_id' => $request->aset_id,
            'jumlah' => $request->jumlah,
        ]);

        if ($simpan) {
            return redirect()->route('pinjam.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PinjamAset  $pinjamAset
     * @return \Illuminate\Http\Response
     */
    public function show(PinjamAset $pinjamAset)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PinjamAset  $pinjamAset
     * @return \Illuminate\Http\Response
     */
    public function edit(PinjamAset $pinjamAset)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PinjamAset  $pinjamAset
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PinjamAset $pinjamAset)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PinjamAset  $pinjamAset
     * @return \Illuminate\Http\Response
     */
    public function destroy(PinjamAset $pinjamAset)
    {
        //
    }
}
