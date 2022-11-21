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
               'name'=>'Super Admin',
               'email_verified_at'=> now(),
               'email'=>'admin@example.com',
                'role'=>'admin',
                'isactive'=>'1',
               'password'=> bcrypt('admin123'),
            ]
        ];
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
