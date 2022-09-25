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

          $table->unsignedInteger('alumni_ID');
          $table->foreign('alumni_ID')->references('alumni_ID')->on('tbl_alumni');

          $table->string('fathersName')->nullable();
          $table->string('fathersNumber')->nullable();
          $table->string('mothersName')->nullable();
          $table->string('mothersNumber')->nullable();

          $table->string('office')->nullable();
          $table->string('position')->nullable();
          $table->string('officeDates')->nullable();

          $table->string('seminar1')->nullable();
          $table->string('seminar1Date')->nullable();
          $table->string('seminar2')->nullable();
          $table->string('seminar2Date')->nullable();
          $table->string('seminar3')->nullable();
          $table->string('seminar3Date')->nullable();

          $table->string('dataPrivacy')->nullable();
          $table->date('dateSigned')->nullable();
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
