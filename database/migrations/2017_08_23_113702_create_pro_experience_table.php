<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProExperienceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('pro_experiences', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('user_id');
        $table->string('society_name');
        $table->string('society_address');
        $table->string('contract_type');
        $table->string('contract_duration');
        $table->string('position_held');
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
      Schema::dropIfExists('pro_experiences');
    }
  }
