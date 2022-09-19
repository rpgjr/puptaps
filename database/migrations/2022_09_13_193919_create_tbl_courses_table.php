<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_courses', function (Blueprint $table) {
            $table->string('courseID');
            $table->string('courseDesc');
        });

        DB::table('tbl_courses')->insert(
            array(
                [
                    'courseID' => 'BSEd-English',
                    'courseDesc' => 'Bachelor in Secondary Education Major in English',
                ],
                [
                    'courseID' => 'BSEd-Social Studies',
                    'courseDesc' => 'Bachelor in Secondary Education Major in Social Studies',
                ],
                [
                    'courseID' => 'BSEd-Mathematics',
                    'courseDesc' => 'Bachelor in Secondary Education Major in Mathematics',
                ],
                [
                    'courseID' => 'DICT',
                    'courseDesc' => 'Diploma in Information Communication Technology',
                ],
                [
                    'courseID' => 'BSIT',
                    'courseDesc' => 'Bachelor of Science in Information Technology',
                ],
                [
                    'courseID' => 'DICMT',
                    'courseDesc' => 'Diploma in Information Communication Management Technology',
                ],
                [
                    'courseID' => 'BSAM',
                    'courseDesc' => 'Bachelor of Science in Actuarial Mathematics',
                ],
                [
                    'courseID' => 'BSBA-HRDM',
                    'courseDesc' => 'Bachelor of Science in Business Administration Major in Human Resource Development Managementy',
                ],
                [
                    'courseID' => 'BSBA-MM',
                    'courseDesc' => 'Bachelor of Science in Business Administration Major in Marketing Management',
                ],
                [
                    'courseID' => 'BSECE',
                    'courseDesc' => 'Bachelor of Science in Electronics and Communications Engineering',
                ],
                [
                    'courseID' => 'BSME',
                    'courseDesc' => 'Bachelor of Science in Mechanical Engineering',
                ],
                [
                    'courseID' => 'BSEM',
                    'courseDesc' => 'Bachelor of Science in Entrepreneurial Management',
                ],
                [
                    'courseID' => 'BBA-Management',
                    'courseDesc' => 'Bachelor in Business Administration Major in Management',
                ],
                [
                    'courseID' => 'BEM',
                    'courseDesc' => 'Bachelor in Entrepreneurial Management',
                ],
                [
                    'courseID' => 'BCDPM',
                    'courseDesc' => 'Bachelor of Computer in Data Processing Management',
                ],
                [
                    'courseID' => 'DOMT-LOM',
                    'courseDesc' => 'Diploma in Office Management Technology with specialization in Legal Office Management',
                ],
                [
                    'courseID' => 'DAMT',
                    'courseDesc' => 'Diploma in Accounting Management Technology',
                ],
                [
                    'courseID' => 'BSOA-LT',
                    'courseDesc' => 'Bachelor of Science in Office Administration Major in Legal Transcription',
                ],
                [
                    'courseID' => 'PBDM',
                    'courseDesc' => 'Post Baccalaureate Diploma in Management',
                ],
                [
                    'courseID' => 'DMET',
                    'courseDesc' => 'Diploma in Mechanical Engineering Technology',
                ],
                [
                    'courseID' => 'BSA',
                    'courseDesc' => 'Bachelor of Science in Accountancy',
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
        Schema::dropIfExists('tbl_courses');
    }
};
