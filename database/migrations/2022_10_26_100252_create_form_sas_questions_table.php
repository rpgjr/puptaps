<?php

use App\Models\Forms\Sas\SasQuestions;
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
        Schema::create('form_sas_questions', function (Blueprint $table) {
            $table->increments('question_id');
            $table->unsignedInteger('category_id')
                  ->nullable();
            $table->foreign('category_id')
                  ->references('category_id')
                  ->on('form_sas_categories');
            $table->string('question_text');
            $table->string('question_type');
        });

        SasQuestions::insert(
            array(
                [
                    "category_id"   => "1",
                    "question_text" => "Data Privacy Notice",
                    "question_type" => "checkbox",
                ],

                [
                    "category_id"   => "2",
                    "question_text" => "Number of Semesters with PUP",
                    "question_type" => "select",
                ],

                [
                    "category_id"   => "3",
                    "question_text" => "Clarity of objectives of the SAS program, projects and activities.",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "3",
                    "question_text" => "Relevance of the SAS Program to students’ welfare and development.",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "3",
                    "question_text" => "Consistency of the SAS Program with the PUP mission and vision.",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "3",
                    "question_text" => "Consistency of the SAS Program with the College goals and curricular program objectives.",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "3",
                    "question_text" => "Dissemination of the SAS Program, projects and activities.",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "3",
                    "question_text" => "Qualification of heads and administrative support staff of SAS offices.",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "3",
                    "question_text" => "Management and supervision of SAS program.",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "3",
                    "question_text" => "Implementation of the SAS program.",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "3",
                    "question_text" => "Responsiveness of the SAS program to students’ welfare and development.",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "3",
                    "question_text" => "Adequacy of administrative support personnel for SAS.",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "3",
                    "question_text" => "Proximity of SAS offices.",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "3",
                    "question_text" => "Promptness of student services and transactions.",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "3",
                    "question_text" => "Courtesy of administrative support personnel.",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "3",
                    "question_text" => "Adequacy of physical facilities for SAS program, projects and activities.",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "3",
                    "question_text" => "Adequacy of equipment and materials for SAS.",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "3",
                    "question_text" => "Efficiency of student services and transactions.",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "3",
                    "question_text" => "Transparency and accountability in spending the budget for SAS.",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "3",
                    "question_text" => "Monitoring of SAS program, projects and activities.",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "3",
                    "question_text" => "Evaluation of the SAS program, projects and activities.",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "3",
                    "question_text" => "Conduct research on SAS program, projects and activities.",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "3",
                    "question_text" => "Dissemination and utilization of research results and outputs.",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "4",
                    "question_text" => "Rewards and incentives for excellence in SAS.",
                    "question_type" => "radio",
                ],

                [
                    "category_id"   => "4",
                    "question_text" => "Dissemination of policy on student recruitment, selection, admission and retention.",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "4",
                    "question_text" => "System of student recruitment, selection and admission.",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "4",
                    "question_text" => "Implementation of the policy on student retention.",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "4",
                    "question_text" => "Processing of students’ entrance and requirements.",
                    "question_type" => "radio",
                ],

                [
                    "category_id"   => "5",
                    "question_text" => "Availability of informational materials on the University’s mission and vision.",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "5",
                    "question_text" => "Availability of informational materials on College goals and program objectives.",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "5",
                    "question_text" => "Accessibility of informational materials on academic rules and regulations, student conduct and discipline.",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "5",
                    "question_text" => "Orientation of new students.",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "5",
                    "question_text" => "Orientation of returning and continuing students.",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "5",
                    "question_text" => "Availability of educational, career and social reading materials.",
                    "question_type" => "radio",
                ],

                [
                    "category_id"   => "6",
                    "question_text" => "Accessibility of informational materials about scholarships, study grants and other schemes of financial aides.",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "6",
                    "question_text" => "Implementation of the policy on scholarship, study grants and other schemes of financial aide.",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "6",
                    "question_text" => "Monitoring of the performance of recipients of scholarship, study grants and other schemes of financial aides.",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "6",
                    "question_text" => "Generation of funds for scholarship, study grants and other financial aides.",
                    "question_type" => "radio",
                ],

                [
                    "category_id"   => "7",
                    "question_text" => "Dissemination of health services program, projects and activities.",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "7",
                    "question_text" => "Adequacy of medical services.",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "7",
                    "question_text" => "Adequacy of dental services.",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "7",
                    "question_text" => "Competence of medical and dental personnel.",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "7",
                    "question_text" => "Adequacy of medical and dental facilities, equipment and supplies.",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "7",
                    "question_text" => "Promptness of medical and dental services.",
                    "question_type" => "radio",
                ],

                [
                    "category_id"   => "8",
                    "question_text" => "Appraisal system for student’s attributes, adaptability, and competence.",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "8",
                    "question_text" => "Availability of counseling services.",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "8",
                    "question_text" => "Maintenance of confidential records by the guidance counselors.",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "8",
                    "question_text" => "Availability of counseling rooms.",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "8",
                    "question_text" => "Monitoring of the effectiveness of guidance and placement activities.",
                    "question_type" => "radio",
                ],

                [
                    "category_id"   => "9",
                    "question_text" => "Management of safety and sanitary conditions of canteen and food outlets.",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "9",
                    "question_text" => "Coordination of the food safety of food services outside the school premises with the local government.",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "9",
                    "question_text" => "Nutrition of meals served in the canteen and food outlets.",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "9",
                    "question_text" => "Affordability and reasonableness of prices of the meals in the canteen and food outlets.",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "9",
                    "question_text" => "Personal hygiene of canteen and food outlets personnel.",
                    "question_type" => "radio",
                ],

                [
                    "category_id"   => "10",
                    "question_text" => "Availability of informational materials about career and employment opportunities.",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "10",
                    "question_text" => "Appraisal of students for career and job placement.",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "10",
                    "question_text" => "Provision for career seminar and job placement services.",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "10",
                    "question_text" => "Linkages and networks for possible career and job placement.",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "10",
                    "question_text" => "Monitoring of student placement provided.",
                    "question_type" => "radio",
                ],

                [
                    "category_id"   => "11",
                    "question_text" => "Competence of security personnel.",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "11",
                    "question_text" => "Care of safety and security of students and students’ belongings.",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "11",
                    "question_text" => "Maintenance of safety and security of school environment, buildings and facilities.",
                    "question_type" => "radio",
                ],

                [
                    "category_id"   => "12",
                    "question_text" => "Dissemination of gender sensitive rules and regulations.",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "12",
                    "question_text" => "Definition of appropriate student conduct.",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "12",
                    "question_text" => "Sanctions for student misconduct.",
                    "question_type" => "radio",
                ],

                [
                    "category_id"   => "13",
                    "question_text" => "Accommodation of students with disabilities and learners with special needs.",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "13",
                    "question_text" => "Provision of facilities for students with disabilities.",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "13",
                    "question_text" => "Provision of life skills training like conflict management and counseling.",
                    "question_type" => "radio",
                ],

                [
                    "category_id"   => "14",
                    "question_text" => "System of accreditation and recognition of student organizations.",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "14",
                    "question_text" => "Dissemination of requirements and procedure for accreditation of student groups.",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "14",
                    "question_text" => "Provision of office space and other school support for accredited student groups.",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "14",
                    "question_text" => "Mechanism for student organizations to coordinate with school administration.",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "14",
                    "question_text" => "Provision of leadership trainings.",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "14",
                    "question_text" => "Opportunity to interact with other student organizations from other schools.",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "14",
                    "question_text" => "Recognition of the students the right to govern themselves.",
                    "question_type" => "radio",
                ],
                [
                    "category_id"   => "14",
                    "question_text" => "Opportunity to represent students in student council and board of regents.",
                    "question_type" => "radio",
                ],

                [
                    "category_id"   => "15",
                    "question_text" => "Date Signed",
                    "question_type" => "date",
                ],
                [
                    "category_id"   => "15",
                    "question_text" => "Signature",
                    "question_type" => "text",
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
        Schema::dropIfExists('form_sas_questions');
    }
};
