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
            $table->increments('career_ID');

            $table->unsignedInteger('alumni_ID')->nullable();
            $table->foreign('alumni_ID')->references('alumni_ID')->on('tbl_alumni');

            $table->unsignedInteger('admin_ID')->nullable();
            $table->foreign('admin_ID')->references('admin_ID')->on('tbl_admin');

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
