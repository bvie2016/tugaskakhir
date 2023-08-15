<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            JenisSeeder::class,
            TipeSeeder::class,
            RuangSeeder::class,
            AdminSeeder::class,
            BarangSeeder::class,
            DosenSeeder::class,
            LabSeeder::class,
            AsetSeeder::class,
            LabSeeder::class,
            LaporanSeeder::class,
            JabatanSeeder::class,
        ]);
    }
}
