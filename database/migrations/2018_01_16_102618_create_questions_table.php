<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('questionnaire_id')->nullable();
            $table->integer('category_id')->nullable();
            $table->string('title');
            $table->string('type');
            $table->longText('default_value')->nullable();
            $table->boolean('mandatory')->default(true);
            //TODO: renommer en hint?
            $table->longText('goal')->nullable();
            $table->integer('weight')->nullable();
            $table->integer('order')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
