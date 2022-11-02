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
        Schema::create('form_pds', function (Blueprint $table) {
          $table->increments('pds_ID');

          $table->unsignedInteger('alumni_id');
          $table->foreign('alumni_id')->references('alumni_id')->on('tbl_alumni');

          $table->string('fathers_name')->nullable();
          $table->string('fathers_number')->nullable();
          $table->string('mothers_name')->nullable();
          $table->string('mothers_number')->nullable();

          $table->string('office')->nullable();
          $table->string('position')->nullable();
          $table->string('office_dates')->nullable();

          $table->string('seminar_1')->nullable();
          $table->string('seminar_1_date')->nullable();
          $table->string('seminar_2')->nullable();
          $table->string('seminar_2_date')->nullable();
          $table->string('seminar_3')->nullable();
          $table->string('seminar_3_date')->nullable();

          $table->string('data_privacy')->nullable();
          $table->date('date_signed')->nullable();
          $table->string('signature')->nullable();

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
        Schema::dropIfExists('form_pds');
    }
};
