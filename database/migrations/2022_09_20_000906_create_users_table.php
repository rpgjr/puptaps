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

            $table->unsignedInteger('alumni_id')
                  ->nullable();
            $table->foreign('alumni_id')
                  ->references('alumni_id')
                  ->on('tbl_alumni');

            $table->unsignedInteger('admin_id')
                  ->nullable();
            $table->foreign('admin_id')
                  ->references('admin_id')
                  ->on('tbl_admin');

            $table->string('email');
            $table->string('username');
            $table->string('password');
            $table->string('user_role');
            $table->string('account_status');
        });

        // DB::table('users')->insert(
        //     array(
        //         [
        //             'alumni_id' => '1',
        //             'email' => 'sample@gmail.com',
        //             'username' => 'thisIsSample',
        //             'password' => '$2y$10$5EufXamveYAtaaaHrrxfHuhkp0qeTL3e/9hq7AMv/yfdEmj2NWWla',
        //             'user_role' => 'Alumni',
        //         ],
        //     )
        // );

        DB::table('users')->insert(
            array(
                [
                    'admin_id' => '1',
                    'email' => 'pupt.alumniportalsystem@gmail.com',
                    'username' => 'Admin',
                    'password' => '$2y$10$5EufXamveYAtaaaHrrxfHuhkp0qeTL3e/9hq7AMv/yfdEmj2NWWla',
                    'user_role' => 'Admin',
                    'account_status' => 'Activated',
                ],
                [
                    'admin_id' => '2',
                    'email' => 'superadmin@gmail.com',
                    'username' => 'SuperAdmin',
                    'password' => '$2y$10$aAQswT/9Wnj1cChgKdfWEObtDZj.5GMUQkikFkd4ouy2QfawrF6..',
                    'user_role' => 'Super_Admin',
                    'account_status' => 'Activated',
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
