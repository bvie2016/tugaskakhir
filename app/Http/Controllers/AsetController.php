<?php

namespace App\Http\Controllers;

use App\Models\Aset;
use App\Models\Barang;
use App\Models\Jenis;
use App\Models\Ruang;
use App\Models\Tipe;
use Illuminate\Http\Request;

class AsetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Aset::with('jenis')->with('tipe')->get();
        return view('admin.aset.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jenis = Jenis::all();
        $tipe = Tipe::all();
        $ruang = Ruang::all();
        $barang = Barang::all();
        $kode= Aset::all();
        $tahun_pengadaan= Aset::all();

        return view('admin.aset.add', compact(['jenis', 'tipe', 'ruang','barang', 'kode','tahun_pengadaan']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=Aset::create([
            'jenis_id'=>$request->jenis_id,
            'tahun_pengadaan'=>$request->tahun_pengadaan,
            'tipe_id'=>$request->tipe_id,
            'ruang_id'=>$request->ruang_id,
            'kode'=>$request->kode,
            'nama'=>$request->nama,
            'keterangan'=>$request->keterangan,
            'jumlah'=>$request->jumlah,
            'user_id'=> auth()->user()->id,

        ]);
        if ($data){
            return redirect()->route('aset.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aset  $aset
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Aset::with('jenis')->with('tipe')->where('id', $id)->first();

        return view('admin.aset.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aset  $aset
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jenis = Jenis::all();
        $tipe = Tipe::all();
        $ruang = Ruang::all();

        $data = Aset::where('id', $id)->first();

        return view('admin.aset.edit', compact(['data', 'jenis', 'tipe', 'ruang']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aset  $aset
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aset $aset)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aset  $aset
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aset $aset)
    {
        //
    }
}
