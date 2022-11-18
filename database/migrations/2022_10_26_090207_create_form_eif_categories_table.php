<?php

use App\Models\Forms\Eif\EifCategories;
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
        Schema::create('form_eif_categories', function (Blueprint $table) {
            $table->increments('category_id');
            $table->unsignedInteger('form_id')
                  ->nullable();
            $table->foreign('form_id')
                  ->references('form_id')
                  ->on('tbl_forms');
            $table->string('category_name');
        });

        EifCategories::insert(
            array(
                [
                    "form_id"       => "2",
                    "category_name" => "Data Privacy Notice",
                ],
                [
                    "form_id"       => "2",
                    "category_name" => "Personal Information",
                ],
                [
                    "form_id"       => "2",
                    "category_name" => "Overall",
                ],
                [
                    "form_id"       => "2",
                    "category_name" => "Director’s Office",
                ],
                [
                    "form_id"       => "2",
                    "category_name" => "Office of the Head of Academic Programs",
                ],
                [
                    "form_id"       => "2",
                    "category_name" => "Administrative Office",
                ],
                [
                    "form_id"       => "2",
                    "category_name" => "Accounting/Cashier’s Office",
                ],
                [
                    "form_id"       => "2",
                    "category_name" => "Office of Student Services/Scholarship",
                ],
                [
                    "form_id"       => "2",
                    "category_name" => "Admission/Registration Office",
                ],
                [
                    "form_id"       => "2",
                    "category_name" => "Guidance and Counseling Office",
                ],
                [
                    "form_id"       => "2",
                    "category_name" => "Library Services",
                ],
                [
                    "form_id"       => "2",
                    "category_name" => "Medical Services",
                ],
                [
                    "form_id"       => "2",
                    "category_name" => "Dental Services",
                ],
                [
                    "form_id"       => "2",
                    "category_name" => "Security Office",
                ],
                [
                    "form_id"       => "2",
                    "category_name" => "Janitorial Services",
                ],
                [
                    "form_id"       => "2",
                    "category_name" => "Overall PUPT",
                ],
                [
                    "form_id"       => "2",
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
        Schema::dropIfExists('form_eif_categories');
    }
};
