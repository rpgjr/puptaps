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
        });

        PdsQuestions::insert(
            array(
                [
                    "category_id"   => "1",
                    "question_text" => "Data Privacy Notice",
                ],

                [
                    "category_id"   => "2",
                    "question_text" => "Father's Name",
                ],
                [
                    "category_id"   => "2",
                    "question_text" => "Father's Number",
                ],
                [
                    "category_id"   => "2",
                    "question_text" => "Mother's Name",
                ],
                [
                    "category_id"   => "2",
                    "question_text" => "Mother's Nunber",
                ],

                [
                    "category_id"   => "3",
                    "question_text" => "Department/Agency/Office",
                ],
                [
                    "category_id"   => "3",
                    "question_text" => "Position/Job Title",
                ],
                [
                    "category_id"   => "3",
                    "question_text" => "Inclusive Dates",
                ],

                [
                    "category_id"   => "4",
                    "question_text" => "Seminar/Training/Workshop",
                ],
                [
                    "category_id"   => "4",
                    "question_text" => "Inclusive Dates",
                ],

                [
                    "category_id"   => "5",
                    "question_text" => "Date Signed",
                ],
                [
                    "category_id"   => "5",
                    "question_text" => "Signature",
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
