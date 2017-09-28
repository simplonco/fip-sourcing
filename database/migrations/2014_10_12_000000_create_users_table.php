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
      $table->string('last_name');
      $table->string('first_name');
      $table->string('email')->unique();
      $table->string('password');
      $table->string('civility')->nullable();
      $table->string('maiden_name')->nullable();
      $table->string('birth_date')->nullable();
      $table->string('native_city')->nullable();
      $table->string('native_country')->nullable();
      $table->string('nationality')->nullable();
      $table->string('entry_date')->nullable();
      $table->string('marital_status')->nullable();
      $table->integer('number_children')->nullable();
      $table->string('age_children')->nullable();
      $table->string('accomodation')->nullable();
      $table->string('number_social_security')->nullable();
      $table->string('number_cmu')->nullable();
      $table->string('end_visit_date')->nullable();
      $table->string('address')->nullable();
      $table->string('postal_code')->nullable();
      $table->string('city')->nullable();
      $table->string('phone')->nullable();
      $table->string('cellphone')->nullable();
      $table->string('emergency_contact')->nullable();
      $table->string('emergency_phone')->nullable();


      $table->longText('experience_programming')->nullable();
      $table->longText('hero')->nullable();
      $table->longText('hack_story')->nullable();
      $table->longText('course')->nullable();
      $table->longText('motivation')->nullable();
      $table->longText('super_power')->nullable();

      $table->longText('leisure')->nullable();

      $table->string('codecademy_profile')->nullable();
      $table->integer('codecademy_badges')->nullable();
      $table->string('openclassroom_profile')->nullable();
      $table->string('other_profile')->nullable();


      $table->longText('availability')->nullable();
      $table->longText('efforts')->nullable();
      $table->longText('computers')->nullable();
      $table->longText('heard_of')->nullable();

      $table->string('followup_device')->nullable();
      $table->string('sent_by')->nullable();
      $table->string('local_mission')->nullable();

      $table->string('prescriber_contact')->nullable();
      $table->string('prescriber_phone')->nullable();

      $table->string('scholarity')->nullable();
      $table->string('native_language')->nullable();
      $table->string('last_class')->nullable();
      $table->string('last_school')->nullable();
      $table->string('end_scholarity_date')->nullable();
      $table->string('reason')->nullable();
      $table->string('diploma')->nullable();
      $table->string('obtained_diploma')->nullable();
      $table->string('exam')->nullable();
      $table->string('passed_exam')->nullable();
      $table->string('english')->nullable();

      $table->longText('pro_project')->nullable();

      $table->string('pole_emploi_registration')->nullable();
      $table->integer('number_pole_emploi')->nullable();
      $table->string('first_pole_emploi_registration')->nullable();
      $table->string('pole_emploi_password')->nullable();
      $table->string('last_pole_emploi_registration')->nullable();
      $table->string('pole_emploi_registration_reason')->nullable();
      $table->string('pole_emploi_registration_duration')->nullable();
      $table->string('paid_by_pole_emploi')->nullable();
      $table->string('pole_emploi_allocation')->nullable();
      $table->string('rsa')->nullable();
      $table->integer('caf_number')->nullable();
      $table->string('rqth')->nullable();
      $table->string('handicapped_allocations')->nullable();
      $table->string('transportation')->nullable();
      $table->string('driving_license')->nullable();
      $table->string('free_transports_card')->nullable();
      $table->string('free_transports_card_validity')->nullable();

      $table->boolean('application_sent')->default(false);

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
