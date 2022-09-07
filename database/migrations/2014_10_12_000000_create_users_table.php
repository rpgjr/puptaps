<?php

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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('userID');
            $table->string('studNumber');
            $table->string('lastName');
            $table->string('firstName');
            $table->string('middleName');
            $table->string('extName');
            $table->string('courseID');
            $table->integer('batch');
            $table->string('gender');
            $table->date('bday');
            $table->integer('age');
            $table->string('religion');
            $table->string('cityAddress');
            $table->string('provincialAddress')->nullable();
            $table->string('email');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('number');
            $table->string('username');
            $table->string('password');
            $table->string('accessType');
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
};
