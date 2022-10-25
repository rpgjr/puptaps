<?php

use App\Models\Forms;
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
        Schema::create('tbl_forms', function (Blueprint $table) {
            $table->increments('form_id');
            $table->string('form_name');
            $table->string('form_status');
        });

        Forms::insert(
            array(
                [
                    "form_name"     => "Personal Data Sheet",
                    'form_status'   => "Active",
                ],

                [
                    "form_name"     => "Exit Interview Form",
                    'form_status'   => "Active",
                ],

                [
                    "form_name"     => "Student Affairs and Services Form",
                    'form_status'   => "Active",
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
        Schema::dropIfExists('tbl_forms');
    }
};
