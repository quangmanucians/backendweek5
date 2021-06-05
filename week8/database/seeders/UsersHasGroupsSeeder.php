<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersHasGroupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('users_has_groups')->insert([
                'user_id' => random_int(1, 10),
                'group_id' => random_int(1, 10),
            ]);
        }
    }
}