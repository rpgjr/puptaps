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
                    'email' => 'sample@gmail.com',
                    'email_verified_at' => '2022-09-16 23:20:57',
                    'username' => 'thisIsSample',
                    'password' => '$2y$10$5EufXamveYAtaaaHrrxfHuhkp0qeTL3e/9hq7AMv/yfdEmj2NWWla',
                    'user_role' => 'Alumni',
                ],
            )
        );

        DB::table('users')->insert(
            array(
                [
                    'admin_id' => '1',
                    'email' => 'pupt.alumniportalsystem@gmail.com',
                    'username' => 'Admin',
                    'email_verified_at' => '2022-09-16 23:20:57',
                    'password' => '$2y$10$5EufXamveYAtaaaHrrxfHuhkp0qeTL3e/9hq7AMv/yfdEmj2NWWla',
                    'user_role' => 'Admin',
                ],
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
        Schema::dropIfExists('users');
    }
};
