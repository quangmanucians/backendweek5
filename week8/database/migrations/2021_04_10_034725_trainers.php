<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Trainers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainers', function (Blueprint $table) {
            $table->bigIncrements('trainer_id');
            $table->string('trainer_name',55);
            $table->string('company_id',11);
            $table->string('trainer_email');
            $table->string('trainer_phone',55);
            $table->integer('status',false,55)->unsigned()->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

    }

    public function down()
    {
        Schema::dropIfExists('trainers');
    }
}
