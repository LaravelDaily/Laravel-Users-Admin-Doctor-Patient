<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

            $table->string('doctor_licence_no')->nullable();
            $table->date('doctor_licence_start_date')->nullable();
            $table->date('doctor_licence_end_date')->nullable();
            $table->integer('doctor_stamp_number')->nullable();
            $table->string('doctor_hospital_name')->nullable();
            $table->string('doctor_department')->nullable();
            $table->string('doctor_specialty')->nullable();
            $table->text('doctor_biography')->nullable();
            $table->string('doctor_work_days')->nullable();
            $table->string('doctor_work_hours')->nullable();

            $table->date('patent_birth_date')->nullable();
            $table->string('patient_declared_address')->nullable();
            $table->string('patient_home_address')->nullable();
            $table->string('patient_phone_no')->nullable();
            $table->string('patient_gender')->nullable();
            $table->integer('patient_personal_code')->nullable();
            $table->string('patient_social_number')->nullable();
            $table->dateTime('patient_last_visit_time')->nullable();
            $table->string('patient_last_visit_reason')->nullable();
            $table->text('patient_description')->nullable();

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
