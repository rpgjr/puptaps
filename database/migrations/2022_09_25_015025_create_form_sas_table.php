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
        Schema::create('form_sas', function (Blueprint $table) {
            $table->increments('sas_ID');

            $table->unsignedInteger('alumni_id');
            $table->foreign('alumni_id')->references('alumni_id')->on('tbl_alumni');

            $table->integer('sec1_q1');
            $table->integer('sec1_q2');
            $table->integer('sec1_q3');
            $table->integer('sec1_q4');
            $table->integer('sec1_q5');
            $table->integer('sec1_q6');
            $table->integer('sec1_q7');
            $table->integer('sec1_q8');
            $table->integer('sec1_q9');
            $table->integer('sec1_q10');
            $table->integer('sec1_q11');
            $table->integer('sec1_q12');
            $table->integer('sec1_q13');
            $table->integer('sec1_q14');
            $table->integer('sec1_q15');
            $table->integer('sec1_q16');
            $table->integer('sec1_q17');
            $table->integer('sec1_q18');
            $table->integer('sec1_q19');
            $table->integer('sec1_q20');
            $table->integer('sec1_q21');
            $table->integer('sec1_q22');

            $table->integer('sec2_q1');
            $table->integer('sec2_q2');
            $table->integer('sec2_q3');
            $table->integer('sec2_q4');

            $table->integer('sec3_q1');
            $table->integer('sec3_q2');
            $table->integer('sec3_q3');
            $table->integer('sec3_q4');
            $table->integer('sec3_q5');
            $table->integer('sec3_q6');

            $table->integer('sec4_q1');
            $table->integer('sec4_q2');
            $table->integer('sec4_q3');
            $table->integer('sec4_q4');

            $table->integer('sec5_q1');
            $table->integer('sec5_q2');
            $table->integer('sec5_q3');
            $table->integer('sec5_q4');
            $table->integer('sec5_q5');
            $table->integer('sec5_q6');

            $table->integer('sec6_q1');
            $table->integer('sec6_q2');
            $table->integer('sec6_q3');
            $table->integer('sec6_q4');
            $table->integer('sec6_q5');

            $table->integer('sec7_q1');
            $table->integer('sec7_q2');
            $table->integer('sec7_q3');
            $table->integer('sec7_q4');
            $table->integer('sec7_q5');

            $table->integer('sec8_q1');
            $table->integer('sec8_q2');
            $table->integer('sec8_q3');
            $table->integer('sec8_q4');
            $table->integer('sec8_q5');

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
            $table->integer('sec12_q4');
            $table->integer('sec12_q5');
            $table->integer('sec12_q6');
            $table->integer('sec12_q7');
            $table->integer('sec12_q8');

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
        Schema::dropIfExists('form_sas');
    }
};
