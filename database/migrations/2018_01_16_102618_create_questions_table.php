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
        Schema::create('question', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('formation_id')->nullable();
            $table->integer('creator_id')->nullable();
            $table->integer('category_id')->nullable();
            $table->string('title');
            $table->string('type');
            $table->json('default_value')->nullable();
            $table->boolean('mandatory');
            $table->longText('goal')->nullable();
            $table->integer('weight');
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
        Schema::dropIfExists('question');
    }
}
