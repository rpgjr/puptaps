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
        Schema::create('form_exit_interview', function (Blueprint $table) {
            $table->increments('exit_ID');

            $table->unsignedInteger('alumni_id');
            $table->foreign('alumni_id')->references('alumni_id')->on('tbl_alumni');

            $table->string('employment_status')->nullable();
            $table->string('reason')->nullable();

            $table->integer('sec1_q1');
            $table->integer('sec1_q2');
            $table->integer('sec1_q3');
            $table->integer('sec1_q4');
            $table->integer('sec1_q5');
            $table->integer('sec1_q6');
            $table->integer('sec1_q7');

            $table->integer('sec2_q1');
            $table->integer('sec2_q2');
            $table->integer('sec2_q3');

            $table->integer('sec3_q1');
            $table->integer('sec3_q2');
            $table->integer('sec3_q3');

            $table->integer('sec4_q1');
            $table->integer('sec4_q2');
            $table->integer('sec4_q3');

            $table->integer('sec5_q1');
            $table->integer('sec5_q2');
            $table->integer('sec5_q3');

            $table->integer('sec6_q1');
            $table->integer('sec6_q2');
            $table->integer('sec6_q3');

            $table->integer('sec7_q1');
            $table->integer('sec7_q2');
            $table->integer('sec7_q3');

            $table->integer('sec8_q1');
            $table->integer('sec8_q2');
            $table->integer('sec8_q3');

            $table->integer('sec9_q1');
            $table->integer('sec9_q2');
            $table->integer('sec9_q3');

            $table->integer('sec10_q1');
            $table->integer('sec10_q2');
            $table->integer('sec10_q3');

            $table->integer('sec11_q1');
            $table->integer('sec11_q2');
            $table->integer('sec11_q3');

            $table->integer('sec12_q1');
            $table->integer('sec12_q2');
            $table->integer('sec12_q3');

            $table->integer('sec13_q1');
            $table->integer('sec13_q2');
            $table->integer('sec13_q3');

            $table->integer('sec14_q1');
            $table->integer('sec14_q2');
            $table->integer('sec14_q3');

            $table->longText('comment')->nullable();

            $table->string('data_privacy');
            $table->date('date_signed');
            $table->string('signature');

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
        Schema::dropIfExists('form_exit_interview');
    }
};
