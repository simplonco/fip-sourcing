<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lastName');
            $table->string('firstName');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('birth_date');
            $table->string('native_country');
            $table->string('nationality');
            $table->string('address');
            $table->string('phone')->unique();
            $table->string('social_status');
            $table->string('number_pole_emploie')->unique();
            $table->string('number_social_security')->unique();
            $table->string('study')->nullable();
            $table->string('experience_programming')->nullable();
            $table->string('what_heros')->nullable();
            $table->longText('hack_storie')->nullable();
            $table->text('course')->nullable();
            $table->string('english')->nullable();
            $table->longText('motivation')->nullable();
            $table->string('super_power')->nullable();
            $table->string('codecademy_profile')->nullable();
            $table->string('openclassroom_profile')->nullable();
            $table->string('other_profile')->nullable();
            $table->string('availability')->nullable();
            $table->longText('constraints')->nullable();
            $table->string('notoriety')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
