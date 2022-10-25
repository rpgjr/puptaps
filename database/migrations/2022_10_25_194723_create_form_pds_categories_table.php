<?php

use App\Models\Forms\Pds\PdsCategories;
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
        Schema::create('form_pds_categories', function (Blueprint $table) {
            $table->increments('category_id');
            $table->unsignedInteger('form_id')
                  ->nullable();
            $table->foreign('form_id')
                  ->references('form_id')
                  ->on('tbl_forms');
            $table->string('category_name');
        });

        PdsCategories::insert(
            array(
                [
                    "form_id"       => "1",
                    "category_name" => "Data Privacy Notice",
                ],

                [
                    "form_id"       => "1",
                    "category_name" => "Personal Information",
                ],

                [
                    "form_id"       => "1",
                    "category_name" => "Work Experience/s",
                ],

                [
                    "form_id"       => "1",
                    "category_name" => "Trainings/Seminars Attended",
                ],

                [
                    "form_id"       => "1",
                    "category_name" => "Waiver",
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
        Schema::dropIfExists('form_pds_categories');
    }
};
