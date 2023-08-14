<?php

namespace Database\Seeders;

use App\Models\Barang;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Barang::create([
            'kode_barang'=>'BG01',
            'nama_barang'=>'Monitor',
            'stok'=>'5',
            'status'=>'Baik'
        ]);
    }
}
