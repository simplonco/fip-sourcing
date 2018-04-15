<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('notes', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('candidate_id')->nullable();
          $table->integer('recruiter_id')->nullable();
          $table->integer('session_id')->nullable();
          $table->integer('hero_note')->nullable();
          $table->integer('dev_qualities_note')->nullable();
          $table->integer('personal_goal_note')->nullable();
          $table->integer('dev_point_note')->nullable();
          $table->integer('superpower_note')->nullable();
          $table->longText('comment')->nullable();
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
        Schema::dropIfExists('notes');
    }
}
