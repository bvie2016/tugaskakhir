<?php

namespace Database\Seeders;

use App\Models\Dosen;
use Illuminate\Database\Seeder;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dosen::create([
            'nidn'=>'12345678',
            'nama'=>'Bapak dan Ibu',
            'kontak'=>'086444444444',
            'user_id'=>1
        ]);
    }
}
