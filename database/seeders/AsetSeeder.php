<?php

namespace Database\Seeders;

use App\Models\Aset;
use Illuminate\Database\Seeder;

class AsetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Aset::create([
            'jenis_id'=>1,
            'tipe_id'=>1,
            'ruang_id'=>1,
            'user_id'=>1,
            'kode'=>'P001',
            'nama'=>'Pulpen',
            'tahun_pengadaan'=>'2022',
            'jumlah' => 2,
            'keterangan'=>'Masih Digunakan'
        ]);
    }
}
