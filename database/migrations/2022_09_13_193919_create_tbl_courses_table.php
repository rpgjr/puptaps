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
            $table->string('course_ID');
            $table->string('course_Desc');
        });

        DB::table('tbl_courses')->insert(
            array(
                [
                    'course_ID' => 'BSEd-English',
                    'course_Desc' => 'Bachelor in Secondary Education Major in English',
                ],
                [
                    'course_ID' => 'BSEd-Social Studies',
                    'course_Desc' => 'Bachelor in Secondary Education Major in Social Studies',
                ],
                [
                    'course_ID' => 'BSEd-Mathematics',
                    'course_Desc' => 'Bachelor in Secondary Education Major in Mathematics',
                ],
                [
                    'course_ID' => 'DICT',
                    'course_Desc' => 'Diploma in Information Communication Technology',
                ],
                [
                    'course_ID' => 'BSIT',
                    'course_Desc' => 'Bachelor of Science in Information Technology',
                ],
                [
                    'course_ID' => 'DICMT',
                    'course_Desc' => 'Diploma in Information Communication Management Technology',
                ],
                [
                    'course_ID' => 'BSAM',
                    'course_Desc' => 'Bachelor of Science in Actuarial Mathematics',
                ],
                [
                    'course_ID' => 'BSBA-HRDM',
                    'course_Desc' => 'Bachelor of Science in Business Administration Major in Human Resource Development Managementy',
                ],
                [
                    'course_ID' => 'BSBA-MM',
                    'course_Desc' => 'Bachelor of Science in Business Administration Major in Marketing Management',
                ],
                [
                    'course_ID' => 'BSECE',
                    'course_Desc' => 'Bachelor of Science in Electronics and Communications Engineering',
                ],
                [
                    'course_ID' => 'BSME',
                    'course_Desc' => 'Bachelor of Science in Mechanical Engineering',
                ],
                [
                    'course_ID' => 'BSEM',
                    'course_Desc' => 'Bachelor of Science in Entrepreneurial Management',
                ],
                [
                    'course_ID' => 'BBA-Management',
                    'course_Desc' => 'Bachelor in Business Administration Major in Management',
                ],
                [
                    'course_ID' => 'BEM',
                    'course_Desc' => 'Bachelor in Entrepreneurial Management',
                ],
                [
                    'course_ID' => 'BCDPM',
                    'course_Desc' => 'Bachelor of Computer in Data Processing Management',
                ],
                [
                    'course_ID' => 'DOMT-LOM',
                    'course_Desc' => 'Diploma in Office Management Technology with specialization in Legal Office Management',
                ],
                [
                    'course_ID' => 'DAMT',
                    'course_Desc' => 'Diploma in Accounting Management Technology',
                ],
                [
                    'course_ID' => 'BSOA-LT',
                    'course_Desc' => 'Bachelor of Science in Office Administration Major in Legal Transcription',
                ],
                [
                    'course_ID' => 'PBDM',
                    'course_Desc' => 'Post Baccalaureate Diploma in Management',
                ],
                [
                    'course_ID' => 'DMET',
                    'course_Desc' => 'Diploma in Mechanical Engineering Technology',
                ],
                [
                    'course_ID' => 'BSA',
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
