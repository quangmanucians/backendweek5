<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInternshipDiariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('internship_diaries', function (Blueprint $table) {
            $table->increments('internship_diaries_id',11);
            $table->string('internship_diaries_name',255);
            $table->integer('teacher_id',false,55);
            $table->integer('user_id',false,55);
            $table->integer('trainer_id',false,55);
            $table->timestamp('day_start');
            $table->timestamp('day_end');
            $table->integer('course_id',false,55);
            $table->integer('status',false,55)->unsigned()->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('internship_diaries');
    }
}
