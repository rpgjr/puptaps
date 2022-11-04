<?php

use App\Models\Forms\Pds\PdsQuestions;
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
        Schema::create('form_pds_questions', function (Blueprint $table) {
            $table->increments('question_id');
            $table->unsignedInteger('category_id')
                  ->nullable();
            $table->foreign('category_id')
                  ->references('category_id')
                  ->on('form_pds_categories');
            $table->string('question_text');
            $table->string('question_type');
        });

        PdsQuestions::insert(
            array(
                [
                    "category_id"   => "1",
                    "question_text" => "Data Privacy Notice",
                    "question_type" => "checkbox",
                ],

                [
                    "category_id"   => "2",
                    "question_text" => "Father's Name",
                    "question_type" => "text",
                ],
                [
                    "category_id"   => "2",
                    "question_text" => "Father's Number",
                    "question_type" => "text",
                ],
                [
                    "category_id"   => "2",
                    "question_text" => "Mother's Name",
                    "question_type" => "text",
                ],
                [
                    "category_id"   => "2",
                    "question_text" => "Mother's Number",
                    "question_type" => "text",
                ],

                [
                    "category_id"   => "3",
                    "question_text" => "Department/Agency/Office",
                    "question_type" => "text",
                ],
                [
                    "category_id"   => "3",
                    "question_text" => "Position/Job Title",
                    "question_type" => "text",
                ],
                [
                    "category_id"   => "3",
                    "question_text" => "Inclusive Dates",
                    "question_type" => "text",
                ],

                [
                    "category_id"   => "4",
                    "question_text" => "Seminar/Training/Workshop",
                    "question_type" => "text",
                ],
                [
                    "category_id"   => "4",
                    "question_text" => "Inclusive Dates",
                    "question_type" => "text",
                ],
                [
                    "category_id"   => "4",
                    "question_text" => "Seminar/Training/Workshop",
                    "question_type" => "text",
                ],
                [
                    "category_id"   => "4",
                    "question_text" => "Inclusive Dates",
                    "question_type" => "text",
                ],
                [
                    "category_id"   => "4",
                    "question_text" => "Seminar/Training/Workshop",
                    "question_type" => "text",
                ],
                [
                    "category_id"   => "4",
                    "question_text" => "Inclusive Dates",
                    "question_type" => "text",
                ],

                [
                    "category_id"   => "5",
                    "question_text" => "Date Signed",
                    "question_type" => "date",
                ],
                [
                    "category_id"   => "5",
                    "question_text" => "Signature",
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
        Schema::dropIfExists('form_pds_questions');
    }
};
