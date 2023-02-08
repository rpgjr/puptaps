<?php

use App\Models\Tracer\TracerQuestions;
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
        Schema::create('tbl_tracer_questions', function (Blueprint $table) {
            $table->increments('question_id');
            $table->unsignedInteger('category_id')
                  ->nullable();
            $table->foreign('category_id')
                  ->references('category_id')
                  ->on('tbl_tracer_categories');
            $table->string('question_text');
            $table->string('question_type');
        });

        TracerQuestions::insert(
            array(
                [
                    "category_id"   => "1",
                    "question_text" => "Are you a Board Exam Passer?",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "1",
                    "question_text" => "Is it related to the Program the you've graduated in PUP Taguig?",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "1",
                    "question_text" => "What licensure exam did you take?",
                    "question_type" => "select",
                ],
                [
                    "category_id"   => "1",
                    "question_text" => "When did you take it?",
                    "question_type" => "date",
                ],
                [
                    "category_id"   => "1",
                    "question_text" => "Did you passed the Civil Service Examination?",
                    "question_type" => "radio",
                ],

                [
                    "category_id"   => "2",
                    "question_text" => "Job Position",
                    "question_type" => "text",
                ],
                [
                    "category_id"   => "2",
                    "question_text" => "Company Name",
                    "question_type" => "text",
                ],
                [
                    "category_id"   => "2",
                    "question_text" => "Employment Start Date",
                    "question_type" => "date",
                ],
                [
                    "category_id"   => "2",
                    "question_text" => "Nature of Work / Job Description",
                    "question_type" => "text",
                ],
                [
                    "category_id"   => "2",
                    "question_text" => "Type of Employment",
                    "question_type" => "select",
                ],
                [
                    "category_id"   => "2",
                    "question_text" => "Monthly Income",
                    "question_type" => "select",
                ],
                [
                    "category_id"   => "2",
                    "question_text" => "Company Email",
                    "question_type" => "text",
                ],
                [
                    "category_id"   => "2",
                    "question_text" => "Company Number",
                    "question_type" => "text",
                ],
                [
                    "category_id"   => "2",
                    "question_text" => "Is your current Job related to the Program you've graduated in PUP Taguig?",
                    "question_type" => "radio",
                ],

                [
                    "category_id"   => "3",
                    "question_text" => "Job Position",
                    "question_type" => "text",
                ],
                [
                    "category_id"   => "3",
                    "question_text" => "Company Name",
                    "question_type" => "text",
                ],
                [
                    "category_id"   => "3",
                    "question_text" => "Employment Start Date",
                    "question_type" => "date",
                ],
                [
                    "category_id"   => "3",
                    "question_text" => "Nature of Work / Job Description",
                    "question_type" => "text",
                ],
                [
                    "category_id"   => "3",
                    "question_text" => "Company Email",
                    "question_type" => "text",
                ],
                [
                    "category_id"   => "3",
                    "question_text" => "Company Number",
                    "question_type" => "text",
                ],
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_tracer_questions');
    }
};
