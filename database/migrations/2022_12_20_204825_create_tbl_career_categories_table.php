<?php

use App\Models\CareerCategories;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        Schema::create('tbl_career_categories', function (Blueprint $table) {
            $table->increments("career_category_id");
            $table->string("career_category");
        });

        CareerCategories::insert(
            array(
                [
                    'career_category' => 'IT',
                ],
                [
                    'career_category' => 'Engineering',
                ],
                [
                    'career_category' => 'Education',
                ],
                [
                    'career_category' => 'Accountancy',
                ],
                [
                    'career_category' => 'Business Administration',
                ],
                [
                    'career_category' => 'Office Administration',
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
        Schema::dropIfExists('tbl_career_categories');
    }
};
