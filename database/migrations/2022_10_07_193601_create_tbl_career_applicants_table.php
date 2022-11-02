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

            $table->unsignedInteger('alumni_id')->nullable();
            $table->foreign('alumni_id')->references('alumni_id')->on('tbl_alumni');

            $table->unsignedInteger('career_id');
            $table->foreign('career_id')->references('career_id')->on('tbl_careers');

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
