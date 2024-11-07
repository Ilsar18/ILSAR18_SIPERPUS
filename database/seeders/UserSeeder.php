<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'username' => 'johndoe',
                'name' => 'John Doe',
                'email' => 'johndoe@example.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('password123'), // Enkripsi kata sandi
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'janedoe',
                'name' => 'Jane Doe',
                'email' => 'janedoe@example.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('password123'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
