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
            $table->string('course_id');
            $table->string('course_Desc');
        });

        DB::table('tbl_courses')->insert(
            array(
                [
                    'course_id' => 'BSEd-English',
                    'course_Desc' => 'Bachelor in Secondary Education Major in English',
                ],
                [
                    'course_id' => 'BSEd-Social Studies',
                    'course_Desc' => 'Bachelor in Secondary Education Major in Social Studies',
                ],
                [
                    'course_id' => 'BSEd-Mathematics',
                    'course_Desc' => 'Bachelor in Secondary Education Major in Mathematics',
                ],
                [
                    'course_id' => 'DICT',
                    'course_Desc' => 'Diploma in Information Communication Technology',
                ],
                [
                    'course_id' => 'BSIT',
                    'course_Desc' => 'Bachelor of Science in Information Technology',
                ],
                [
                    'course_id' => 'DICMT',
                    'course_Desc' => 'Diploma in Information Communication Management Technology',
                ],
                [
                    'course_id' => 'BSAM',
                    'course_Desc' => 'Bachelor of Science in Actuarial Mathematics',
                ],
                [
                    'course_id' => 'BSBA-HRDM',
                    'course_Desc' => 'Bachelor of Science in Business Administration Major in Human Resource Development Managementy',
                ],
                [
                    'course_id' => 'BSBA-MM',
                    'course_Desc' => 'Bachelor of Science in Business Administration Major in Marketing Management',
                ],
                [
                    'course_id' => 'BSECE',
                    'course_Desc' => 'Bachelor of Science in Electronics and Communications Engineering',
                ],
                [
                    'course_id' => 'BSME',
                    'course_Desc' => 'Bachelor of Science in Mechanical Engineering',
                ],
                [
                    'course_id' => 'BSEM',
                    'course_Desc' => 'Bachelor of Science in Entrepreneurial Management',
                ],
                [
                    'course_id' => 'BBA-Management',
                    'course_Desc' => 'Bachelor in Business Administration Major in Management',
                ],
                [
                    'course_id' => 'BEM',
                    'course_Desc' => 'Bachelor in Entrepreneurial Management',
                ],
                [
                    'course_id' => 'BCDPM',
                    'course_Desc' => 'Bachelor of Computer in Data Processing Management',
                ],
                [
                    'course_id' => 'DOMT-LOM',
                    'course_Desc' => 'Diploma in Office Management Technology with specialization in Legal Office Management',
                ],
                [
                    'course_id' => 'DAMT',
                    'course_Desc' => 'Diploma in Accounting Management Technology',
                ],
                [
                    'course_id' => 'BSOA-LT',
                    'course_Desc' => 'Bachelor of Science in Office Administration Major in Legal Transcription',
                ],
                [
                    'course_id' => 'PBDM',
                    'course_Desc' => 'Post Baccalaureate Diploma in Management',
                ],
                [
                    'course_id' => 'DMET',
                    'course_Desc' => 'Diploma in Mechanical Engineering Technology',
                ],
                [
                    'course_id' => 'BSA',
                    'course_Desc' => 'Bachelor of Science in Accountancy',
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
