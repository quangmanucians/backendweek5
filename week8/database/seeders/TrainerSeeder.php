<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	$query = "insert into trainers values (null,?,?,?,?)";
	for($i=0;$i<10;$i++){
		DB::insert($query,['quang',1,'abcd','abcd']);
	}
        //
    }
}
