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
        Schema::create('tbl_careers', function (Blueprint $table) {
            $table->increments('careerID');

            $table->unsignedInteger('userID');
            $table->foreign('userID')->references('userID')->on('users');

            $table->string('job_ad_image')->nullable();
            $table->string('job_name')->nullable();
            $table->string('company')->nullable();
            $table->integer('salary')->nullable();
            $table->longText('description')->nullable();
            $table->string('category')->nullable();
            $table->string('email')->nullable();
            $table->string('number')->nullable();
            $table->boolean('approval');
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
        Schema::dropIfExists('tbl_careers');
    }
};
