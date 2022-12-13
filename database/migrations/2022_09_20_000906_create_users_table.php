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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('user_id');

            $table->unsignedInteger('alumni_id')->nullable();
            $table->foreign('alumni_id')->references('alumni_id')->on('tbl_alumni');

            $table->unsignedInteger('admin_id')->nullable();
            $table->foreign('admin_id')->references('admin_id')->on('tbl_admin');

            $table->string('stud_number')->nullable();
            $table->string('email');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('username');
            $table->string('password');
            $table->string('user_role');
            $table->timestamps();
        });

        DB::table('users')->insert(
            array(
                [
                    'alumni_id' => '1',
                    'stud_number' => '2019-00432-TG-0',
                    'email' => 'lickmyballpen@gmail.com',
                    'email_verified_at' => '2022-09-16 23:20:57',
                    'username' => 'rodgeneta',
                    'password' => '$2y$10$4T6QsO9Exkivcm7iAQijCuOVoRY.AN91gghpnsrFTINY.Z14Ed7A2',
                    'user_role' => 'Alumni',
                ],
            )
        );

        DB::table('users')->insert(
            array(
                // [
                //     'admin_id' => '1',
                //     'email' => 'pupt.alumniportalsystem@gmail.com',
                //     'username' => 'IT_admin',
                //     'email_verified_at' => '2022-09-16 23:20:57',
                //     'password' => '$2y$10$4T6QsO9Exkivcm7iAQijCuOVoRY.AN91gghpnsrFTINY.Z14Ed7A2',
                //     'user_role' => 'IT Admin',
                // ],
                [
                    'admin_id' => '1',
                    'email' => 'pupt.alumniportalsystem@gmail.com',
                    'username' => 'Admin',
                    'email_verified_at' => '2022-09-16 23:20:57',
                    'password' => '$2y$10$4T6QsO9Exkivcm7iAQijCuOVoRY.AN91gghpnsrFTINY.Z14Ed7A2',
                    'user_role' => 'Admin',
                ],
            )
        );

        // Schema::create('users', function (Blueprint $table) {
        //     $table->increments('userID');
        //     $table->string('studNumber');
        //     $table->string('lastName');
        //     $table->string('firstName');
        //     $table->string('middleName')->nullable();
        //     $table->string('suffix')->nullable();
        //     $table->string('courseID');
        //     $table->integer('batch');
        //     $table->string('gender');
        //     $table->date('bday')->nullable();
        //     $table->integer('age')->nullable();
        //     $table->string('religion')->nullable();
        //     $table->string('cityAddress');
        //     $table->string('provincialAddress')->nullable();
        //     $table->string('email');
        //     $table->timestamp('email_verified_at')->nullable();
        //     $table->string('number');
        //     $table->string('username');
        //     $table->string('password');
        //     $table->string('accessType');
        //     $table->string('userProfile')->nullable();
        //     $table->timestamps();
        // });

        // DB::table('users')->insert(
        //     array(
        //         'studNumber' => '2019-00432-TG-0',
        //         'lastName' => 'Sample',
        //         'firstName' => 'Sample',
        //         'middleName' => 'Sample',
        //         'courseID' => 'BSIT',
        //         'batch' => '2022',
        //         'gender' => 'Male',
        //         'cityAddress' => 'Sample St., Sample City',
        //         'email' => 'lickmyballpen@gmail.com',
        //         'email_verified_at' => '2022-09-16 23:20:57',
        //         'number' => '0909090909',
        //         'username' => 'sample',
        //         'password' => '$2y$10$4T6QsO9Exkivcm7iAQijCuOVoRY.AN91gghpnsrFTINY.Z14Ed7A2',
        //         'accessType' => 'Alumni',
        //     )
        // );
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
};
