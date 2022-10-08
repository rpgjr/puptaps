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
            $table->increments('applicant_ID');

            $table->unsignedInteger('alumni_ID')->nullable();
            $table->foreign('alumni_ID')->references('alumni_ID')->on('tbl_alumni');

            $table->unsignedInteger('career_ID');
            $table->foreign('career_ID')->references('career_ID')->on('tbl_careers');

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
