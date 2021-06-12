<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Quang',
            'username' => 'QuangManucians',
            'email' => 'zzquangmanucianszz@gmail.com',
            'password' => Hash::make('az1234567890'),
        ]);
    }
}
