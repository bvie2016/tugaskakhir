<?php

namespace App\Http\Controllers;

use App\Models\Jenis;
use App\Models\Laporan;
use App\Models\Ruang;
use App\Models\Tipe;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Laporan::with('jenis')->with('tipe')->with('ruang')->with('user')->get();
        return view('admin.laporan.index', compact('data'));
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


        return view('admin.laporan.add', compact(['jenis', 'tipe', 'ruang']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=Laporan::create([
            'jenis_id'=>$request->jenis_id,
            'tipe_id'=>$request->tipe_id,
            'ruang_id'=>$request->ruang_id,
            'keterangan'=>$request->keterangan,
            // 'pelapor'=>$request->pelapor,
            'user_id'=> auth()->user()->id,

        ]);
        if ($data){
            return redirect()->route('aset.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function show(Laporan $laporan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function edit(Laporan $laporan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Laporan $laporan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laporan $laporan)
    {
        //
    }
}
