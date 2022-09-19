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
        Schema::create('tbl_career_applicants', function (Blueprint $table) {
            $table->increments('applicantID');

            $table->unsignedInteger('userID');
            $table->foreign('userID')->references('userID')->on('users');

            $table->unsignedInteger('careerID');
            $table->foreign('careerID')->references('careerID')->on('tbl_careers');

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
        Schema::dropIfExists('tbl_career_applicants');
    }
};
