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
            $table->string('question_placeholder')
                  ->nullable();
        });

        PdsQuestions::insert(
            array(
                [
                    "category_id"           => "1",
                    "question_text"         => "Data Privacy Notice",
                    "question_type"         => "checkbox",
                    "question_placeholder"  => null,
                ],

                [
                    "category_id"           => "2",
                    "question_text"         => "Father's Name",
                    "question_type"         => "text",
                    "question_placeholder"  => "Father's Full Name",
                ],
                [
                    "category_id"           => "2",
                    "question_text"         => "Father's Number",
                    "question_type"         => "text",
                    "question_placeholder"  => "09123456789",
                ],
                [
                    "category_id"           => "2",
                    "question_text"         => "Mother's Name",
                    "question_type"         => "text",
                    "question_placeholder"  => "Mother's Maiden Name",
                ],
                [
                    "category_id"           => "2",
                    "question_text"         => "Mother's Number",
                    "question_type"         => "text",
                    "question_placeholder"  => "09123456789",
                ],

                [
                    "category_id"           => "3",
                    "question_text"         => "Department/Agency/Office",
                    "question_type"         => "text",
                    "question_placeholder"  => "e.g. HR Department",
                ],
                [
                    "category_id"           => "3",
                    "question_text"         => "Position/Job Title",
                    "question_type"         => "text",
                    "question_placeholder"  => "e.g HR Recruiter",
                ],
                [
                    "category_id"           => "3",
                    "question_text"         => "Inclusive Dates",
                    "question_type"         => "text",
                    "question_placeholder"  => "March 1 to June 1 of 2022",
                ],

                [
                    "category_id"           => "4",
                    "question_text"         => "Seminar/Training/Workshop",
                    "question_type"         => "text",
                    "question_placeholder"  => "Seminar/Training/Workshop",
                ],
                [
                    "category_id"           => "4",
                    "question_text"         => "Inclusive Dates",
                    "question_type"         => "text",
                    "question_placeholder"  => "March 1 to June 1 of 2022",
                ],
                [
                    "category_id"           => "4",
                    "question_text"         => "Seminar/Training/Workshop",
                    "question_type"         => "text",
                    "question_placeholder"  => "Seminar/Training/Workshop",
                ],
                [
                    "category_id"           => "4",
                    "question_text"         => "Inclusive Dates",
                    "question_type"         => "text",
                    "question_placeholder"  => "March 1 to June 1 of 2022",
                ],
                [
                    "category_id"           => "4",
                    "question_text"         => "Seminar/Training/Workshop",
                    "question_type"         => "text",
                    "question_placeholder"  => "Seminar/Training/Workshop",
                ],
                [
                    "category_id"           => "4",
                    "question_text"         => "Inclusive Dates",
                    "question_type"         => "text",
                    "question_placeholder"  => "March 1 to June 1 of 2022",
                ],

                [
                    "category_id"           => "5",
                    "question_text"         => "Date Signed",
                    "question_type"         => "date",
                    "question_placeholder"  => null,
                ],
                [
                    "category_id"           => "5",
                    "question_text"         => "Signature",
                    "question_type"         => "text",
                    "question_placeholder"  => "PRINTED NAME",
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
