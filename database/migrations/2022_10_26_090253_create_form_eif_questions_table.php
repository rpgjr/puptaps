<?php

use App\Models\Forms\Eif\EifQuestions;
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
        Schema::create('form_eif_questions', function (Blueprint $table) {
            $table->increments('question_id');
            $table->unsignedInteger('category_id')
                  ->nullable();
            $table->foreign('category_id')
                  ->references('category_id')
                  ->on('form_eif_categories');
            $table->string('question_text');
            $table->string('question_type');
        });

        EifQuestions::insert(
            array(
                [
                    "category_id"   => "1",
                    "question_text" => "Data Privacy Notice",
                    "question_type" => "checkbox",
                ],

                [
                    "category_id"   => "2",
                    "question_text" => "If employed (Position, Company/Company Address, Telephone Number) If not employed (Put N/A)",
                    "question_type" => "text",
                ],
                [
                    "category_id"   => "2",
                    "question_text" => "Reason for leaving PUP (Put a check on the box of your choice/s)",
                    "question_type" => "radio",
                ],

                [
                    "category_id"   => "3",
                    "question_text" => "Academic Standard",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "3",
                    "question_text" => "School Activities",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "3",
                    "question_text" => "Faculty/Teacher",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "3",
                    "question_text" => "Facilities",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "3",
                    "question_text" => "Course Taken",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "3",
                    "question_text" => "Student Organization/s",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "3",
                    "question_text" => "Classmates",
                    "question_type" => "radio",
                ],

                [
                    "category_id"   => "4",
                    "question_text" => "Quality of Service",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "4",
                    "question_text" => "Timeliness of Service",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "4",
                    "question_text" => "Courtesy of Staff",
                    "question_type" => "radio",
                ],

                [
                    "category_id"   => "5",
                    "question_text" => "Quality of Service",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "5",
                    "question_text" => "Timeliness of Service",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "5",
                    "question_text" => "Courtesy of Staff",
                    "question_type" => "radio",
                ],

                [
                    "category_id"   => "6",
                    "question_text" => "Quality of Service",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "6",
                    "question_text" => "Timeliness of Service",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "6",
                    "question_text" => "Courtesy of Staff",
                    "question_type" => "radio",
                ],

                [
                    "category_id"   => "7",
                    "question_text" => "Quality of Service",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "7",
                    "question_text" => "Timeliness of Service",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "7",
                    "question_text" => "Courtesy of Staff",
                    "question_type" => "radio",
                ],

                [
                    "category_id"   => "8",
                    "question_text" => "Quality of Service",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "8",
                    "question_text" => "Timeliness of Service",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "8",
                    "question_text" => "Courtesy of Staff",
                    "question_type" => "radio",
                ],

                [
                    "category_id"   => "9",
                    "question_text" => "Quality of Service",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "9",
                    "question_text" => "Timeliness of Service",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "9",
                    "question_text" => "Courtesy of Staff",
                    "question_type" => "radio",
                ],

                [
                    "category_id"   => "10",
                    "question_text" => "Quality of Service",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "10",
                    "question_text" => "Timeliness of Service",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "10",
                    "question_text" => "Courtesy of Staff",
                    "question_type" => "radio",
                ],

                [
                    "category_id"   => "11",
                    "question_text" => "Quality of Service",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "11",
                    "question_text" => "Timeliness of Service",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "11",
                    "question_text" => "Courtesy of Staff",
                    "question_type" => "radio",
                ],

                [
                    "category_id"   => "12",
                    "question_text" => "Quality of Service",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "12",
                    "question_text" => "Timeliness of Service",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "12",
                    "question_text" => "Courtesy of Staff",
                    "question_type" => "radio",
                ],

                [
                    "category_id"   => "13",
                    "question_text" => "Quality of Service",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "13",
                    "question_text" => "Timeliness of Service",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "13",
                    "question_text" => "Courtesy of Staff",
                    "question_type" => "radio",
                ],

                [
                    "category_id"   => "14",
                    "question_text" => "Quality of Service",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "14",
                    "question_text" => "Timeliness of Service",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "14",
                    "question_text" => "Courtesy of Staff",
                    "question_type" => "radio",
                ],

                [
                    "category_id"   => "15",
                    "question_text" => "Quality of Service",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "15",
                    "question_text" => "Timeliness of Service",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "15",
                    "question_text" => "Courtesy of Staff",
                    "question_type" => "radio",
                ],

                [
                    "category_id"   => "16",
                    "question_text" => "PUP Taguig Systems and Procedures",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "16",
                    "question_text" => "PUP Taguig Programs/Courses",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "16",
                    "question_text" => "PUP Taguig Services",
                    "question_type" => "radio",
                ],

                [
                    "category_id"   => "17",
                    "question_text" => "Date Signed",
                    "question_type" => "date",
                ],
                [
                    "category_id"   => "17",
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
        Schema::dropIfExists('form_eif_questions');
    }
};
