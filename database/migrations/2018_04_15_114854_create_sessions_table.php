<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('city');
            $table->integer('year');
            $table->date('begin_session');
            $table->date('end_session');
            $table->integer('formation_id');
            $table->date('application_start_date');
            $table->date('application_end_date');
            //TODO: create IU table
            $table->integer('impact_unit')->nullable();
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
        throw new \Exception('Nope!');
    }
}
