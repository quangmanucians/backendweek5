<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class trainersSeender extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i <= 10; $i++){
            DB::table('trainers')->insert([          
            'trainer_name' => Str::random(10),
            'company_id' => 'eltdceduvn',
            'trainer_email' => Str::random(20),
            'trainer_phone' => Str::random(10),
            ]);
        }
    }
}
