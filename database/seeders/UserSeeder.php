<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create(['name' => 'admin']);
        $role = Role::create(['name' => 'sarpras']);
        $role = Role::create(['name' => 'dosen']);
        $data = User::create([
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('12345')
        ]);

        $data->assignRole('admin');
        $data->assignRole('dosen');
        $data->assignRole('sarpras');
    }
    
}
