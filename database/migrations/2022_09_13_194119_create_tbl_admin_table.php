<?php

use App\Models\Admin;
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
        Schema::create('tbl_admin', function (Blueprint $table) {
            $table->increments('admin_id');

            $table->string('last_name');
            $table->string('first_name');
            $table->string('middle_name')
                  ->nullable();
            $table->string('suffix')
                  ->nullable();

            $table->string('email');
            $table->string('username');
            $table->string('password');
            $table->string('user_role');
            $table->timestamps();
        });

        $accounts = array (
            // [
            //     'last_name'     => 'Admin',
            //     'first_name'    => 'Regular',
            //     'email'         => 'pupt.alumniportalsystem@gmail.com',
            //     'username'      => 'Admin',
            //     'password'      => '$2y$10$5EufXamveYAtaaaHrrxfHuhkp0qeTL3e/9hq7AMv/yfdEmj2NWWla',
            //     'user_role'     => 'Admin',
            // ],
            [
                'last_name'     => 'Admin',
                'first_name'    => 'Super',
                'email'         => 'superadmin@gmail.com',
                'username'      => 'SuperAdmin',
                'password'      => '$2y$10$aAQswT/9Wnj1cChgKdfWEObtDZj.5GMUQkikFkd4ouy2QfawrF6..',
                'user_role'     => 'Super_Admin',
            ],
        );

        foreach ($accounts as $account) {
            $admin = new Admin();
            $admin->last_name   = $account['last_name'];
            $admin->first_name  = $account['first_name'];
            $admin->email       = $account['email'];
            $admin->username    = $account['username'];
            $admin->password    = $account['password'];
            $admin->user_role   = $account['user_role'];

            $admin->save();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_admin');
    }
};
