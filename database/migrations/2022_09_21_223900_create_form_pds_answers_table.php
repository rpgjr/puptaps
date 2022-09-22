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
        Schema::create('form_pds_answers', function (Blueprint $table) {
            $table->unsignedInteger('alumni_ID')->nullable();
            $table->foreign('alumni_ID')->references('alumni_ID')->on('tbl_alumni');

            $table->unsignedInteger('pds_question_ID')->nullable();
            $table->foreign('pds_question_ID')->references('pds_question_ID')->on('form_pds_questions');

            $table->string('pds_answer');

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
        Schema::dropIfExists('form_pds_answers');
    }
};
