<?php

use App\Models\Forms\Sas\SasCategories;
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
        Schema::create('form_sas_categories', function (Blueprint $table) {
            $table->increments('category_id');
            $table->unsignedInteger('form_id')
                  ->nullable();
            $table->foreign('form_id')
                  ->references('form_id')
                  ->on('tbl_forms');
            $table->string('category_name');
        });

        SasCategories::insert(
            array(
                [
                    "form_id"       => "3",
                    "category_name" => "Data Privacy Notice",
                ],
                [
                    "form_id"       => "3",
                    "category_name" => "Personal Information",
                ],
                [
                    "form_id"       => "3",
                    "category_name" => "Student Affairs and Services (SAS) Program",
                ],
                [
                    "form_id"       => "3",
                    "category_name" => "Admission Services",
                ],
                [
                    "form_id"       => "3",
                    "category_name" => "Information and Orientation Services",
                ],
                [
                    "form_id"       => "3",
                    "category_name" => "Scholarship and Financial Assistance",
                ],
                [
                    "form_id"       => "3",
                    "category_name" => "Health Services",
                ],
                [
                    "form_id"       => "3",
                    "category_name" => "Guidance and Counseling Services",
                ],
                [
                    "form_id"       => "3",
                    "category_name" => "Food Services",
                ],
                [
                    "form_id"       => "3",
                    "category_name" => "Career and Placement Services",
                ],
                [
                    "form_id"       => "3",
                    "category_name" => "Safety and Security Services",
                ],
                [
                    "form_id"       => "3",
                    "category_name" => "Student Discipline",
                ],
                [
                    "form_id"       => "3",
                    "category_name" => "Services for Students with Special Needs",
                ],
                [
                    "form_id"       => "3",
                    "category_name" => "Student Organizations and Activities",
                ],
                [
                    "form_id"       => "3",
                    "category_name" => "Date and Signature",
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
        Schema::dropIfExists('form_sas_categories');
    }
};
