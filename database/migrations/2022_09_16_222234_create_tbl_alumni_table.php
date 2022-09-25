<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_alumni', function (Blueprint $table) {
            $table->increments('alumni_ID');
            $table->string('studNumber');
            $table->string('lastName');
            $table->string('firstName');
            $table->string('middleName')->nullable();
            $table->string('suffix')->nullable();
            $table->string('courseID');
            $table->integer('batch');
            $table->integer('semesters')->nullable();
            $table->string('gender');
            $table->date('bday')->nullable();
            $table->integer('age')->nullable();
            $table->string('religion')->nullable();
            $table->string('civilStatus')->nullable();
            $table->string('cityAddress');
            $table->string('provincialAddress')->nullable();
            $table->string('email');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('number');
            $table->string('username');
            $table->string('password');
            $table->string('user_role');
            $table->string('userProfile')->nullable();
            $table->timestamps();
        });

        DB::table('tbl_alumni')->insert(
            array(
                'studNumber' => '2019-00432-TG-0',
                'lastName' => 'Geneta',
                'firstName' => 'Rodrigo',
                'middleName' => 'Pilariza',
                'courseID' => 'BSIT',
                'batch' => '2022',
                'gender' => 'Male',
                'bday' => '2001-01-31',
                'cityAddress' => 'Sample St., Sample City',
                'email' => 'lickmyballpen@gmail.com',
                'email_verified_at' => '2022-09-16 23:20:57',
                'number' => '0909090909',
                'username' => 'rodgeneta',
                'password' => '$2y$10$4T6QsO9Exkivcm7iAQijCuOVoRY.AN91gghpnsrFTINY.Z14Ed7A2',
                'user_role' => 'Alumni',
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_alumni');
    }
};
