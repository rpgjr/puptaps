<?php

use App\Models\Courses;
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
        Schema::create('tbl_courses', function (Blueprint $table) {
            $table->string('course_id');
            $table->string('course_desc');
        });

        Courses::insert(
            array(
                [
                    'course_id'     => 'BSEd-English',
                    'course_desc'   => 'Bachelor in Secondary Education Major in English',
                ],
                [
                    'course_id'     => 'BSEd-Mathematics',
                    'course_desc'   => 'Bachelor in Secondary Education Major in Mathematics',
                ],
                [
                    'course_id'     => 'DICT',
                    'course_desc'   => 'Diploma in Information Communication Technology',
                ],
                [
                    'course_id'     => 'BSIT',
                    'course_desc'   => 'Bachelor of Science in Information Technology',
                ],
                [
                    'course_id'     => 'BSBA-HRM',
                    'course_desc'   => 'Bachelor of Science in Business Administration Major in Human Resource Management',
                ],
                [
                    'course_id'     => 'BSBA-MM',
                    'course_desc'   => 'Bachelor of Science in Business Administration Major in Marketing Management',
                ],
                [
                    'course_id'     => 'BSECE',
                    'course_desc'   => 'Bachelor of Science in Electronics and Communications Engineering',
                ],
                [
                    'course_id'     => 'BSME',
                    'course_desc'   => 'Bachelor of Science in Mechanical Engineering',
                ],
                [
                    'course_id'     => 'DOMT',
                    'course_desc'   => 'Diploma in Office Management Technology',
                ],
                [
                    'course_id'     => 'BSOA',
                    'course_desc'   => 'Bachelor of Science in Office Administration',
                ],
                [
                    'course_id'     => 'BSA',
                    'course_desc'   => 'Bachelor of Science in Accountancy',
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
