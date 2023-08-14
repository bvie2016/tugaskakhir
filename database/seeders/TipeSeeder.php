<?php

namespace Database\Seeders;

use App\Models\Tipe;
use Illuminate\Database\Seeder;

class TipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tipe::create(['nama' => 'Habis Pakai']);
        Tipe::create(['nama' => 'Tetap']);
    }
}
