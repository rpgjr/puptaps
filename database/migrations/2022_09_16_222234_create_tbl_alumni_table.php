<?php

use App\Models\Alumni;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->increments('alumni_id');
            $table->string('stud_number');
            $table->string('last_name');
            $table->string('first_name');
            $table->string('middle_name')
                  ->nullable();
            $table->string('suffix')
                  ->nullable();
            $table->string('course_id');
            $table->integer('batch');
            $table->string('gender')
                  ->nullable();
            $table->date('birthday')
                  ->nullable();
            $table->integer('age')
                  ->nullable();
            $table->string('religion')
                  ->nullable();
            $table->string('civil_status')
                  ->nullable();
            $table->string('city_address')
                  ->nullable();
            $table->string('provincial_address')
                  ->nullable();
            $table->string('email');
            $table->timestamp('email_verified_at')
                  ->nullable();
            $table->string('number');
            $table->string('username');
            $table->string('password');
            $table->string('user_role');
            $table->string('user_profile')
                  ->nullable();
        });

        Alumni::insert(
            array(
                'stud_number'       => '2019-00432-TG-0',
                'last_name'         => 'Last',
                'first_name'        => 'First',
                'middle_name'       => 'Middle',
                'course_id'         => 'BSIT',
                'batch'             => '1950',
                'gender'            => 'Male',
                'birthday'          => '2001-01-31',
                'age'               => '21',
                'city_address'      => 'Sample St.,Sample Barangay, Sample City',
                'email'             => 'sample@gmail.com',
                'email_verified_at' => '2022-09-16 23:20:57',
                'number'            => '0909090909',
                'username'          => 'thisIsSample',
                'password'          => '$2y$10$5EufXamveYAtaaaHrrxfHuhkp0qeTL3e/9hq7AMv/yfdEmj2NWWla',
                'user_role'         => 'Alumni',
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
