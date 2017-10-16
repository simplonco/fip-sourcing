<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuccessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('successes', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('candidate_id')->nullable();
          $table->boolean('welcome_success')->default(false);
          $table->boolean('application_sent_success')->default(false);
          $table->boolean('progress_success')->default(false);
          $table->boolean('html_success')->default(false);
          $table->boolean('css_success')->default(false);
          $table->boolean('js_success')->default(false);
          $table->boolean('php_success')->default(false);
          $table->boolean('hi_score_success')->default(false);
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
        Schema::dropIfExists('successes');
    }
}
