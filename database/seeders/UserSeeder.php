<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // sampel data for akun user
        $user = [
            [
                'username' => 'admin',
               'name'=>'ini akun Admin',
               'email'=>'admin@example.com',
                'role'=>'admin',
               'password'=> bcrypt('admin123'),
            ],
            [
                'username' => 'user',
               'name'=>'ini akun User (non admin)',
               'email'=>'user@example.com',
                'role'=>'user',
               'password'=> bcrypt('user123'),
            ],
        ];
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
