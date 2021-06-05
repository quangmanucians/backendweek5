<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiaryContentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diary_content', function (Blueprint $table) {
            $table->increments('diary_content_id',11);
            $table->string('diary_content_day_of_week',255);
            $table->string('diary_content_work',255);
            $table->string('diary_content_content',255);
            $table->string('diary_content_note',255);
            $table->string('diary_content_teacher_comment',255);
            $table->string('diary_content_trainer_comment',255);
            $table->integer('week_id',false,55);
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
        Schema::dropIfExists('diary_content');
    }
}
