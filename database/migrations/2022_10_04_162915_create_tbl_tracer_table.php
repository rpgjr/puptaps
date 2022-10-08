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
        Schema::create('tbl_tracer', function (Blueprint $table) {
            $table->increments('tracer_ID');

            $table->unsignedInteger('alumni_ID');
            $table->foreign('alumni_ID')->references('alumni_ID')->on('tbl_alumni');

            $table->date('current_employement');
            $table->string('current_job_description');
            $table->string('current_job_position');
            $table->string('current_employment_status');
            $table->string('current_monthly_income');
            $table->string('current_company_email');
            $table->string('current_company_number');
            $table->string('relation_to_course');

            $table->date('first_employement');
            $table->string('first_job_description');
            $table->string('first_job_position');
            $table->string('first_company_email');
            $table->string('first_company_number');
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
        Schema::dropIfExists('tbl_tracer');
    }
};
