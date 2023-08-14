<?php

namespace Database\Seeders;

use App\Models\Laporan;
use Illuminate\Database\Seeder;

class LaporanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Laporan::create([
            'jenis_id'=>1,
            'tipe_id'=>1,
            'ruang_id'=>1,
            'user_id'=>1,
            'keterangan'=>'Masih Digunakan'
        ]);
    }
}
