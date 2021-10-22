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
            $table->string('doctor_specialty')->nullable();

            $table->date('patent_birth_date')->nullable();
            $table->string('patient_address')->nullable();
            $table->string('patient_phone_no')->nullable();
            $table->string('patient_gender')->nullable();
            $table->integer('patient_personal_code')->nullable();
            $table->string('patient_social_number')->nullable();

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
