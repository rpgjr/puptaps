<?php

use App\Models\PDS_questions;
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
            $table->increments('pds_question_ID');
            $table->string('pds_question');
            $table->timestamps();
        });

        $data = array(
            [
                'pds_question' => 'Email',
            ],
            [
                'pds_question' => 'Last Name',
            ],
            [
                'pds_question' => 'First Name',
            ],
            [
                'pds_question' => 'Middle Name',
            ],
            [
                'pds_question' => 'Suffix',
            ],
            [
                'pds_question' => 'Gender',
            ],
            [
                'pds_question' => 'Date of Birth',
            ],
            [
                'pds_question' => 'Age',
            ],
            [
                'pds_question' => 'Religion',
            ],
            [
                'pds_question' => 'Degree/Course',
            ],
            [
                'pds_question' => 'Year Graduated',
            ],
            [
                'pds_question' => 'City Address',
            ],
            [
                'pds_question' => 'Provincial Address',
            ],
            [
                'pds_question' => 'Landline/Mobile No.',
            ],
            [
                'pds_question' => 'Father\'s Name',
            ],
            [
                'pds_question' => 'Father\'s Telephone/Cellphone No.',
            ],
            [
                'pds_question' => 'Mother\'s Name',
            ],
            [
                'pds_question' => 'Mother\'s Telephone/Cellphone No.',
            ],
            // =========
            [
                'pds_question' => 'Department/Agency/Office',
            ],
            [
                'pds_question' => 'Position/Title',
            ],
            [
                'pds_question' => 'Inclusive Date',
            ],
            [
                'pds_question' => 'Title of Training/Seminar/Workshop',
            ],
            [
                'pds_question' => 'Inclusive Date',
            ],
        );

        foreach($data as $question) {
            $q = new PDS_questions();
            $q->pds_question = $question['pds_question'];
            $q->save();
        }
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
