<?php

namespace Database\Seeders;

use App\Models\Lab;
use Illuminate\Database\Seeder;

class LabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lab::create([
            'nama_lab'=>'LAB.ICT1',
            'kapasitas'=>'30',
            'kode_barang'=>'BG01'
        ]);
    }
}
