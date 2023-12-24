<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //menambahkan data pada database.
        $userData = [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'role' => 'admin',
                'password' => bcrypt('admin')
            ],
            [
                'name' => 'Manager',
                'email' => 'manager@gmail.com',
                'role' => 'manager',
                'password' => bcrypt('manager')
            ],
            [
                'name' => 'Pegawai',
                'email' => 'pegawai@gmail.com',
                'role' => 'pegawai',
                'password' => bcrypt('pegawai')
            ],
        ];
        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
