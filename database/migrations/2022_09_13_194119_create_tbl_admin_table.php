<?php

use App\Models\Admin;
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
        Schema::create('tbl_admin', function (Blueprint $table) {
            $table->increments('admin_ID');

            $table->string('last_name');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('suffix')->nullable();

            $table->string('email');
            $table->string('username');
            $table->string('password');
            $table->string('user_role');
            $table->timestamps();
        });

        $accounts = array (
            [
                'last_name' => 'Admin',
                'first_name' => 'IT',
                'email' => 'pupt.alumniportalsystem@gmail.com',
                'username' => 'IT_admin',
                'password' => '$2y$10$4T6QsO9Exkivcm7iAQijCuOVoRY.AN91gghpnsrFTINY.Z14Ed7A2',
                'user_role' => 'IT Admin',
            ],

            [
                'last_name' => 'Admin',
                'first_name' => 'Regular',
                'email' => 'pupt.alumniportalsystem@gmail.com',
                'username' => 'Admin',
                'password' => '$2y$10$4T6QsO9Exkivcm7iAQijCuOVoRY.AN91gghpnsrFTINY.Z14Ed7A2',
                'user_role' => 'Admin',
            ],
        );

        foreach ($accounts as $account) {
            $admin = new Admin();
            $admin->last_name = $account['last_name'];
            $admin->first_name = $account['first_name'];
            $admin->email = $account['email'];
            $admin->username = $account['username'];
            $admin->password = $account['password'];
            $admin->user_role = $account['user_role'];

            $admin->save();
        }

        // DB::table('tbl_admin')->insert(
        //     array(
        //         'username' => 'IT_admin',
        //         'email' => 'pupt.alumniportalsystem@gmail.com',
        //         'password' => '$2y$10$4T6QsO9Exkivcm7iAQijCuOVoRY.AN91gghpnsrFTINY.Z14Ed7A2',
        //         'accessType' => 'IT Admin',
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
        Schema::dropIfExists('tbl_admin');
    }
};
