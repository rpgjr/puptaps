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
        Schema::create('tbl_alumni_list', function (Blueprint $table) {
            $table->increments("alumni_list_id");
            $table->string('stud_number')->unique();
            $table->string('last_name');
            $table->string('first_name');
            $table->string('middle_name')
                  ->nullable();
            $table->string('suffix')
                  ->nullable();
            $table->string('course_id');
            $table->string('batch');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_alumni_list');
    }
};
