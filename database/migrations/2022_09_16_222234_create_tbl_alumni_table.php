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
            $table->string('stud_number');
            $table->string('last_name');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('suffix')->nullable();
            $table->string('course_ID');
            $table->integer('batch');
            $table->integer('semesters')->nullable();
            $table->string('gender');
            $table->date('birthday')->nullable();
            $table->integer('age')->nullable();
            $table->string('religion')->nullable();
            $table->string('civil_status')->nullable();
            $table->string('city_address');
            $table->string('provincial_address')->nullable();
            $table->string('email');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('number');
            $table->string('username');
            $table->string('password');
            $table->string('user_role');
            $table->string('user_profile')->nullable();
            $table->timestamps();
        });

        DB::table('tbl_alumni')->insert(
            array(
                'stud_number' => '2019-00432-TG-0',
                'last_name' => 'Geneta',
                'first_name' => 'Rodrigo',
                'middle_name' => 'Pilariza',
                'course_ID' => 'BSIT',
                'batch' => '2022',
                'gender' => 'Male',
                'birthday' => '2001-01-31',
                'city_address' => 'Sample St., Sample City',
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
