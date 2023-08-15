<?php

namespace Database\Seeders;

use App\Models\Jenis;
use Illuminate\Database\Seeder;

class JenisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jenis::create([
            'nama' => 'Sarana'
        ]);
        Jenis::create([
            'nama' => 'Prasaran'
        ]);
    }
}
