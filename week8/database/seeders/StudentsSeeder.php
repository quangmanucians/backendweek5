<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('students')->insert([
                'company_id' => random_int(1, 10),
                'class_id' => random_int(1, 10),
                'user_id' => random_int(1, 10),
                'faculties_id' => random_int(1, 10),
            ]);
        }
    }
}