<?php

use App\Models\Tracer\TracerCategories;
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
        Schema::create('tbl_tracer_categories', function (Blueprint $table) {
            $table->increments('category_id');
            $table->string('category_name');
        });

        TracerCategories::insert(
            array(
                [
                    "category_name" => "Licensure Examinations"
                ],
                [
                    "category_name" => "Current Job / Career Details"
                ],
                [
                    "category_name" => "First Job / Career Details"
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
        Schema::dropIfExists('tbl_tracer_categories');
    }
};
