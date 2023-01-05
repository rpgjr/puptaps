<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Download SAS Form</title>

    <style>
        body {
            font-family: "Times New Roman", Times, serif;
        }

        .pup-logo {
            float: left;
            width: 70px;
            height: 70px;
            margin: 0;
        }

        .title {
            margin-top: 15px;
            margin-left: 70px;
            margin-right: 90px;
        }

        .title p {
            font-size: 20px;
            margin: 0;
            text-align: center;

        }

        .title-sas {
            font-size: 20px;
            text-align: center;
            margin-top: 40px;
        }

        table, th, td {
            /* border: 1px solid black;
            border-collapse: collapse; */
            text-align: left;
            border-collapse: collapse;
        }

        .table-form, .th-form, .td-form {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
        }

        .th-form {
            text-align: center;
        }

        .user {
            font-size: 18px;
            margin-top: 30px;
        }

        .legend {
            list-style: none;
        }

        .legend li {
            font-weight: bold;
            padding: 10px;
            display: inline;

        }
    </style>
</head>
<body>

    <div class="title">
        <div class="logo">
            <img src="{{ public_path('img/pupLogo.png') }}" class="pup-logo">
        </div>
        <div class="title-text">
            <p>Polytechnic University of the Philippines</p>
            <p>Office of the Vice President for Student Services</p>
            <p>CAREER DEVELOPMENT AND PLACEMENT OFFICE</p>
        </div>
    </div>

    <h4 class="title-sas"><u>STUDENTS AFFAIRS AND SERVICES (SAS) FORM</u></h4>

    <div class="user">
        <p>The objective of this study is to assess the Student Affairs and Services (SAS) Program, projects and activities of the Polytechnic University of the Philippines Taguig Branch.
        </p>

        <p style="margin-top: 20px;"><b>Part 1.</b> RESPONDENT’S PERSONAL INFORMATION</p>
        @foreach ($users as $user)
        <table style="width:100%; margin-top: 10px;">
            <tr>
                <th colspan="1" style="width: 16%">Stakeholder: </th>
                <td colspan="1" style="border-bottom: 1px solid black; width: 20%;">Student</td>
                <td colspan="1" style="width: 25%;"></td>
                <th colspan="1" style="width: 11%;">Gender: </th>
                <td colspan="1" style="border-bottom: 1px solid black; width: 15%;">{{ $user->gender }}</td>
                <td colspan="1" style="width: 5%;"></td>
                <th colspan="1" style="width: 7%;">Age: </th>
                <td colspan="1" style="border-bottom: 1px solid black; width: 10%;">{{ $user->age }}</td>
            </tr>
        </table>
        <table style="width:100%; margin-top: 10px; margin-bottom: 20px;">
            <tr>
                <th colspan="1" style="width: 29%">No. of Semesters in PUP: </th>
                <td colspan="1" style="border-bottom: 1px solid black; width: 5%;">{{ $user->semesters }}</td>
                <td colspan="1" style="width: 70%;"></td>
            </tr>
        </table>
        @endforeach

        <p><b>Part 2.</b> ASSESSMENT OF THE STUDENTS AFFAIRS AND SERVICES (SAS) PROGRAM, PROJECTS AND ACTIVITIES OF THE POLYTECHNIC UNIVERSITY OF THE PHILIPPINES TAGUIG BRANCH</p>

        <p>Legend:</p>
        <ul class="legend">
            <li>1 - Very Satisfactory</li>
            <li>2 - Satisfactory</li>
            <li>3 - Unsatisfactory</li>
            <li>4 - Very Unsatisfactory</li>
        </ul>

        @foreach ($userSAS as $sas)

        @endforeach
        <table style="width:100%; margin-top: 20px;" class="table-form">
        {{-- Section 1 --}}
            <tr>
                <th colspan="2" class="th-form">STUDENT AFFAIRS AND SERVICES (SAS) PROGRAM</th>
                <th colspan="1" class="th-form">Rating</th>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">1.</td>
                <td class="td-form">Clarity of objectives of the SAS program, projects and activities.</td>
                <td class="td-form" style="text-align: center;">{{ $sas->sec1_q1 }}</td>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">2.</td>
                <td class="td-form">Relevance of the SAS Program to students’ welfare and development.</td>
                <td class="td-form" style="text-align: center;">{{ $sas->sec1_q2 }}</td>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">3.</td>
                <td class="td-form">Consistency of the SAS Program with the PUP mission and vision.</td>
                <td class="td-form" style="text-align: center;">{{ $sas->sec1_q3 }}</td>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">4.</td>
                <td class="td-form">Consistency of the SAS Program with the College goals and curricular program objectives.</td>
                <td class="td-form" style="text-align: center;">{{ $sas->sec1_q4 }}</td>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">5.</td>
                <td class="td-form">Dissemination of the SAS Program, projects and activities.</td>
                <td class="td-form" style="text-align: center;">{{ $sas->sec1_q5 }}</td>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">6.</td>
                <td class="td-form">Qualification of heads and administrative support staff of SAS offices.</td>
                <td class="td-form" style="text-align: center;">{{ $sas->sec1_q6 }}</td>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">7.</td>
                <td class="td-form">Management and supervision of SAS program.</td>
                <td class="td-form" style="text-align: center;">{{ $sas->sec1_q7 }}</td>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">8.</td>
                <td class="td-form">Implementation of the SAS program.</td>
                <td class="td-form" style="text-align: center;">{{ $sas->sec1_q8 }}</td>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">9.</td>
                <td class="td-form">Responsiveness of the SAS program to students’ welfare and development.</td>
                <td class="td-form" style="text-align: center;">{{ $sas->sec1_q9 }}</td>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">10.</td>
                <td class="td-form">Adequacy of administrative support personnel for SAS.</td>
                <td class="td-form" style="text-align: center;">{{ $sas->sec1_q10 }}</td>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">11.</td>
                <td class="td-form">Proximity of SAS offices.</td>
                <td class="td-form" style="text-align: center;">{{ $sas->sec1_q11 }}</td>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">12.</td>
                <td class="td-form">Promptness of student services and transactions.</td>
                <td class="td-form" style="text-align: center;">{{ $sas->sec1_q12 }}</td>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">13.</td>
                <td class="td-form">Courtesy of administrative support personnel.</td>
                <td class="td-form" style="text-align: center;">{{ $sas->sec1_q13 }}</td>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">14.</td>
                <td class="td-form">Adequacy of physical facilities for SAS program, projects and activities.</td>
                <td class="td-form" style="text-align: center;">{{ $sas->sec1_q14 }}</td>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">15.</td>
                <td class="td-form">Adequacy of equipment and materials for SAS.</td>
                <td class="td-form" style="text-align: center;">{{ $sas->sec1_q15 }}</td>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">16.</td>
                <td class="td-form">Efficiency of student services and transactions.</td>
                <td class="td-form" style="text-align: center;">{{ $sas->sec1_q16 }}</td>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">17.</td>
                <td class="td-form">Transparency and accountability in spending the budget for SAS.</td>
                <td class="td-form" style="text-align: center;">{{ $sas->sec1_q17 }}</td>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">18.</td>
                <td class="td-form">Monitoring of SAS program, projects and activities.</td>
                <td class="td-form" style="text-align: center;">{{ $sas->sec1_q18 }}</td>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">19.</td>
                <td class="td-form">Evaluation of the SAS program, projects and activities.</td>
                <td class="td-form" style="text-align: center;">{{ $sas->sec1_q19 }}</td>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">20.</td>
                <td class="td-form">Conduct research on SAS program, projects and activities.</td>
                <td class="td-form" style="text-align: center;">{{ $sas->sec1_q20 }}</td>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">21.</td>
                <td class="td-form">Dissemination and utilization of research results and outputs.</td>
                <td class="td-form" style="text-align: center;">{{ $sas->sec1_q21 }}</td>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">22.</td>
                <td class="td-form">Rewards and incentives for excellence in SAS.</td>
                <td class="td-form" style="text-align: center;">{{ $sas->sec1_q22 }}</td>
            </tr>
        {{-- Section 2 --}}
            <tr>
                <th colspan="2" class="th-form">ADMISSION SERVICES</th>
                <th colspan="1" class="th-form"></th>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">23.</td>
                <td class="td-form">Dissemination of policy on student recruitment, selection, admission and retention.</td>
                <td class="td-form" style="text-align: center;">{{ $sas->sec2_q1 }}</td>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">24.</td>
                <td class="td-form">System of student recruitment, selection and admission.</td>
                <td class="td-form" style="text-align: center;">{{ $sas->sec2_q2 }}</td>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">25.</td>
                <td class="td-form">Implementation of the policy on student retentions.</td>
                <td class="td-form" style="text-align: center;">{{ $sas->sec2_q3 }}</td>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">26.</td>
                <td class="td-form">Processing of students’ entrance and requirements.</td>
                <td class="td-form" style="text-align: center;">{{ $sas->sec2_q4 }}</td>
            </tr>
        {{-- Section 3 --}}
            <tr>
                <th colspan="2" class="th-form">INFORMATION AND ORIENTATION SERVICES</th>
                <th colspan="1" class="th-form"></th>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">27.</td>
                <td class="td-form">Availability of informational materials on the University’s mission and vision.</td>
                <td class="td-form" style="text-align: center;">{{ $sas->sec3_q1 }}</td>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">28.</td>
                <td class="td-form">Availability of informational materials on College goals and program objectives.</td>
                <td class="td-form" style="text-align: center;">{{ $sas->sec3_q2 }}</td>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">29.</td>
                <td class="td-form">Accessibility of informational materials on academic rules and regulations, student conduct and discipline.</td>
                <td class="td-form" style="text-align: center;">{{ $sas->sec3_q3 }}</td>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">30.</td>
                <td class="td-form">Orientation of new students.</td>
                <td class="td-form" style="text-align: center;">{{ $sas->sec3_q4 }}</td>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">31.</td>
                <td class="td-form">Orientation of returning and continuing students.</td>
                <td class="td-form" style="text-align: center;">{{ $sas->sec3_q5 }}</td>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">32.</td>
                <td class="td-form">Availability of educational, career and social reading materials.</td>
                <td class="td-form" style="text-align: center;">{{ $sas->sec3_q6 }}</td>
            </tr>
        {{-- Section 4 --}}
            <tr>
                <th colspan="2" class="th-form">SCHOLARSHIP AND FINANCIAL ASSISTANCE</th>
                <th colspan="1" class="th-form"></th>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">33.</td>
                <td class="td-form">Accessibility of informational materials about scholarships, study grants and other schemes of financial aides.</td>
                <td class="td-form" style="text-align: center;">{{ $sas->sec4_q1 }}</td>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">34.</td>
                <td class="td-form">Implementation of the policy on scholarship, study grants and other schemes of financial aide.</td>
                <td class="td-form" style="text-align: center;">{{ $sas->sec4_q2 }}</td>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">35.</td>
                <td class="td-form">Monitoring of the performance of recipients of scholarship, study grants and other schemes of financial aides.</td>
                <td class="td-form" style="text-align: center;">{{ $sas->sec4_q3 }}</td>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">36.</td>
                <td class="td-form">Generation of funds for scholarship, study grants and other financial aides.</td>
                <td class="td-form" style="text-align: center;">{{ $sas->sec4_q4 }}</td>
            </tr>
        {{-- Section 5 --}}
            <tr>
                <th colspan="2" class="th-form">HEALTH SERVICES</th>
                <th colspan="1" class="th-form"></th>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">37.</td>
                <td class="td-form">Dissemination of health services program, projects and activities.</td>
                <td class="td-form" style="text-align: center;">{{ $sas->sec5_q1 }}</td>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">38.</td>
                <td class="td-form">Adequacy of medical services.</td>
                <td class="td-form" style="text-align: center;">{{ $sas->sec5_q2 }}</td>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">39.</td>
                <td class="td-form">Adequacy of dental services.</td>
                <td class="td-form" style="text-align: center;">{{ $sas->sec5_q3 }}</td>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">40.</td>
                <td class="td-form">Competence of medical and dental personnel.</td>
                <td class="td-form" style="text-align: center;">{{ $sas->sec5_q4 }}</td>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">41.</td>
                <td class="td-form">Adequacy of medical and dental facilities, equipment and supplies.</td>
                <td class="td-form" style="text-align: center;">{{ $sas->sec5_q5 }}</td>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">42.</td>
                <td class="td-form">Promptness of medical and dental services.</td>
                <td class="td-form" style="text-align: center;">{{ $sas->sec5_q6 }}</td>
            </tr>
        {{-- Section 6 --}}
            <tr>
                <th colspan="2" class="th-form">GUIDANCE AND COUNSELING SERVICES</th>
                <th colspan="1" class="th-form"></th>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">43.</td>
                <td class="td-form">Appraisal system for student’s attributes, adaptability, and competence.</td>
                <td class="td-form" style="text-align: center;">{{ $sas->sec6_q1 }}</td>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">44.</td>
                <td class="td-form">Availability of counseling services.</td>
                <td class="td-form" style="text-align: center;">{{ $sas->sec6_q2 }}</td>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">45.</td>
                <td class="td-form">Maintenance of confidential records by the guidance counselors.</td>
                <td class="td-form" style="text-align: center;">{{ $sas->sec6_q3 }}</td>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">46.</td>
                <td class="td-form">Availability of counseling rooms.</td>
                <td class="td-form" style="text-align: center;">{{ $sas->sec6_q4 }}</td>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">47.</td>
                <td class="td-form">Monitoring of the effectiveness of guidance and placement activities.</td>
                <td class="td-form" style="text-align: center;">{{ $sas->sec6_q5 }}</td>
            </tr>
        {{-- Section 7 --}}
            <tr>
                <th colspan="2" class="th-form">FOOD SERVICES</th>
                <th colspan="1" class="th-form"></th>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">48.</td>
                <td class="td-form">Management of safety and sanitary conditions of canteen and food outlets.</td>
                <td class="td-form" style="text-align: center;">{{ $sas->sec7_q1 }}</td>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">49.</td>
                <td class="td-form">Coordination of the food safety of food services outside the school premises with the local government.</td>
                <td class="td-form" style="text-align: center;">{{ $sas->sec7_q2 }}</td>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">50.</td>
                <td class="td-form">Nutrition of meals served in the canteen and food outlets.</td>
                <td class="td-form" style="text-align: center;">{{ $sas->sec7_q3 }}</td>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">51.</td>
                <td class="td-form">Affordability and reasonableness of prices of the meals in the canteen and food outlets.</td>
                <td class="td-form" style="text-align: center;">{{ $sas->sec7_q4 }}</td>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">52.</td>
                <td class="td-form">Personal hygiene of canteen and food outlets personnel.</td>
                <td class="td-form" style="text-align: center;">{{ $sas->sec7_q5 }}</td>
            </tr>
        {{-- Section 8 --}}
            <tr>
                <th colspan="2" class="th-form">CAREER AND PLACEMENT SERVICES</th>
                <th colspan="1" class="th-form"></th>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">53.</td>
                <td class="td-form">Availability of informational materials about career and employment opportunities.</td>
                <td class="td-form" style="text-align: center;">{{ $sas->sec8_q1 }}</td>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">54.</td>
                <td class="td-form">Appraisal of students for career and job placement.</td>
                <td class="td-form" style="text-align: center;">{{ $sas->sec8_q2 }}</td>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">55.</td>
                <td class="td-form">Provision for career seminar and job placement services.</td>
                <td class="td-form" style="text-align: center;">{{ $sas->sec8_q3 }}</td>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">56.</td>
                <td class="td-form">Linkages and networks for possible career and job placement.</td>
                <td class="td-form" style="text-align: center;">{{ $sas->sec8_q4 }}</td>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">57.</td>
                <td class="td-form">Monitoring of student placement provided.</td>
                <td class="td-form" style="text-align: center;">{{ $sas->sec8_q5 }}</td>
            </tr>
        {{-- Section 9 --}}
            <tr>
                <th colspan="2" class="th-form">SAFETY AND SECURITY SERVICES</th>
                <th colspan="1" class="th-form"></th>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">58.</td>
                <td class="td-form">Competence of security personnel.</td>
                <td class="td-form" style="text-align: center;">{{ $sas->sec9_q1 }}</td>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">59.</td>
                <td class="td-form">Care of safety and security of students and students’ belongings.</td>
                <td class="td-form" style="text-align: center;">{{ $sas->sec9_q2 }}</td>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">60.</td>
                <td class="td-form">Maintenance of safety and security of school environment, buildings and facilities.</td>
                <td class="td-form" style="text-align: center;">{{ $sas->sec9_q3 }}</td>
            </tr>
        {{-- Section 10 --}}
            <tr>
                <th colspan="2" class="th-form">STUDENT DISCIPLINE</th>
                <th colspan="1" class="th-form"></th>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">61.</td>
                <td class="td-form">Dissemination of gender sensitive rules and regulations.</td>
                <td class="td-form" style="text-align: center;">{{ $sas->sec10_q1 }}</td>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">62.</td>
                <td class="td-form">Definition of appropriate student conduct.</td>
                <td class="td-form" style="text-align: center;">{{ $sas->sec10_q2 }}</td>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">63.</td>
                <td class="td-form">Sanctions for student misconduct.</td>
                <td class="td-form" style="text-align: center;">{{ $sas->sec10_q2 }}</td>
            </tr>
        {{-- Section 11 --}}
            <tr>
                <th colspan="2" class="th-form">SERVICES FOR STUDENTS WITH SPECIAL NEEDS</th>
                <th colspan="1" class="th-form"></th>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">64.</td>
                <td class="td-form">Accommodation of students with disabilities and learners with special needs.</td>
                <td class="td-form" style="text-align: center;">{{ $sas->sec11_q1 }}</td>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">65.</td>
                <td class="td-form">Provision of facilities for students with disabilities.</td>
                <td class="td-form" style="text-align: center;">{{ $sas->sec11_q2 }}</td>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">66.</td>
                <td class="td-form">Provision of life skills training like conflict management and counseling.</td>
                <td class="td-form" style="text-align: center;">{{ $sas->sec11_q3 }}</td>
            </tr>
        {{-- Section 12 --}}
            <tr>
                <th colspan="2" class="th-form">STUDENT ORGANIZATIONS AND ACTIVITIES</th>
                <th colspan="1" class="th-form"></th>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">67.</td>
                <td class="td-form">System of accreditation and recognition of student organizations.</td>
                <td class="td-form" style="text-align: center;">{{ $sas->sec12_q1 }}</td>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">68.</td>
                <td class="td-form">Dissemination of requirements and procedure for accreditation of student groups.</td>
                <td class="td-form" style="text-align: center;">{{ $sas->sec12_q2 }}</td>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">69.</td>
                <td class="td-form">Provision of office space and other school support for accredited student group.</td>
                <td class="td-form" style="text-align: center;">{{ $sas->sec12_q3 }}</td>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">70.</td>
                <td class="td-form">Mechanism for student organizations to coordinate with school administration.</td>
                <td class="td-form" style="text-align: center;">{{ $sas->sec12_q4 }}</td>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">71.</td>
                <td class="td-form">Provision of leadership trainings.</td>
                <td class="td-form" style="text-align: center;">{{ $sas->sec12_q5 }}</td>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">72.</td>
                <td class="td-form">Opportunity to interact with other student organizations from other schools.</td>
                <td class="td-form" style="text-align: center;">{{ $sas->sec12_q6 }}</td>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">73.</td>
                <td class="td-form">Recognition of the students the right to govern themselves.</td>
                <td class="td-form" style="text-align: center;">{{ $sas->sec12_q7 }}</td>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">74.</td>
                <td class="td-form">Opportunity to represent students in student council and board of regents.</td>
                <td class="td-form" style="text-align: center;">{{ $sas->sec12_q8 }}</td>
            </tr>
        </table>
    </div>

</body>
</html>
