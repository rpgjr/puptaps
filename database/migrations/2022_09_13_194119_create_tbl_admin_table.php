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
            $table->increments('adminID');
            $table->string('username');
            $table->string('email');
            $table->string('password');
            $table->string('accessType');
            $table->timestamps();
        });

        $accounts = array (
            [
                'username' => 'IT_admin',
                'email' => 'pupt.alumniportalsystem@gmail.com',
                'password' => '$2y$10$4T6QsO9Exkivcm7iAQijCuOVoRY.AN91gghpnsrFTINY.Z14Ed7A2',
                'accessType' => 'IT Admin',
            ],

            [
                'username' => 'Admin',
                'email' => 'pupt.alumniportalsystem@gmail.com',
                'password' => '$2y$10$4T6QsO9Exkivcm7iAQijCuOVoRY.AN91gghpnsrFTINY.Z14Ed7A2',
                'accessType' => 'Admin',
            ],
        );

        foreach ($accounts as $account) {
            $admin = new Admin();
            $admin->username = $account['username'];
            $admin->email = $account['email'];
            $admin->password = $account['password'];
            $admin->accessType = $account['accessType'];

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
