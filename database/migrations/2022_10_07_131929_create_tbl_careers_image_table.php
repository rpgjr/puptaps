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
        Schema::create('tbl_careers_image', function (Blueprint $table) {
            $table->increments('career_image_ID');

            $table->unsignedInteger('alumni_id')->nullable();
            $table->foreign('alumni_id')->references('alumni_id')->on('tbl_alumni');

            $table->unsignedInteger('admin_id')->nullable();
            $table->foreign('admin_id')->references('admin_id')->on('tbl_admin');

            $table->string('job_ad_image')->nullable();
            $table->string('category')->nullable();
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
        Schema::dropIfExists('tbl_careers_image');
    }
};
