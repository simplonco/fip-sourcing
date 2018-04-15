<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionnairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questionnaires', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->boolean('global')->default(false);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('formation_questionnaire', function(Blueprint $table){
            $table->increments('id');
            $table->integer('formation_id')->nullable();
            $table->integer('questionnaire_id')->nullable();
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
        throw new \Exception('nah!');
    }
}
