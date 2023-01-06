<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Download SAS Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

    <style>
        body {
            font-family: "Times New Roman", Times, serif;
        }

        .pdf-header {
            font-size: 18px;
        }

        .table-form , .th-form   , .td-form  {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
        }

        .th-form {
            text-align: center;
        }

        .pup-logo {
            float: left;
            width: 82px;
            height: 82px;
            margin-left: 100px;
            margin-right: 15px;
            margin-top: 10px;
        }

        .legend {
            list-style: none;
            text-align: center;
        }

        .legend li {
            font-weight: bold;
            padding: 8px;
            display: inline;
        }
    </style>
</head>
<body>

    <div class="container-fluid">
        <div class="row pdf-header">
            <div class="col-6">
                <img src="{{ public_path('img/pupLogo.png') }}" class="pup-logo">
            </div>
            <div class="col-6 fw-bold">
                <p class="my-1" style="font-size: 16px;">Republic of the Philippines</p>
                <p class="my-1" style="font-size: 18px;">POLYTECHNIC UNIVERSITY OF THE PHILIPPINES</p>
                <p class="my-1" style="font-size: 16px;">Office of the Vice President for Student Services</p>
                <p class="my-1" style="font-size: 16px;">TAGUIG BRANCH</p>
            </div>
        </div>
    </div>

    <h4 class="mt-4 mb-5 text-center text-decoration-underline">STUDENTS AFFAIRS AND SERVICES (SAS) FORM</h4>

    <div>
        <p>The objective of this study is to assess the Student Affairs and Services (SAS) Program, projects and activities of the Polytechnic University of the Philippines Taguig Branch.
        </p>

        <p class="mt-4"><b>Part 1.</b> RESPONDENT’S PERSONAL INFORMATION</p>
        @foreach ($users as $user)
        <table style="width:100%; margin-top: 10px;">
            <tr>
                <th colspan="1" style="width: 10%">Stakeholder: </th>
                <td colspan="1" style="width: 20%; border-bottom: 1px solid black;">Student</td>
                <td colspan="1" style="width: 20%;"></td>
                <th colspan="1" style="width: 5%;">Sex: </th>
                <td colspan="1" style="width: 10%; border-bottom: 1px solid black;">{{ $user->sex }}</td>
                <td colspan="1" style="width: 10%;"></td>
                <th colspan="1" style="width: 5%;">Age: </th>
                <td colspan="1" style="width: 20%; border-bottom: 1px solid black;">{{ $user->age }} years old</td>
            </tr>
        </table>
        <table style="width:100%; margin-top: 10px; margin-bottom: 20px;">
            <tr>
                <th colspan="1" style="width: 24%">No. of Semesters in PUP: </th>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 2)
                        <td colspan="1" style="border-bottom: 1px solid black; width: 16%;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
                <td colspan="1" style="width: 60%;"></td>
            </tr>
        </table>
        @endforeach

        <p class="mt-4"><b>Part 2.</b> ASSESSMENT OF THE STUDENTS AFFAIRS AND SERVICES (SAS) PROGRAM, PROJECTS AND ACTIVITIES OF THE POLYTECHNIC UNIVERSITY OF THE PHILIPPINES TAGUIG BRANCH</p>

        <p>Legend:</p>
        <ul class="legend">
            <li>1 - Very Satisfactory</li>
            <li>2 - Satisfactory</li>
            <li>3 - Unsatisfactory</li>
            <li>4 - Very Unsatisfactory</li>
        </ul>
        {{-- Section 1 --}}
        <table style="width:100%; margin-top: 20px;" class="table-form">
            <tr>
                <th colspan="2" class="th-form">STUDENT AFFAIRS AND SERVICES (SAS) PROGRAM</th>
                <th colspan="1" class="th-form">Rating</th>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">1.</td>
                <td class="td-form">Clarity of objectives of the SAS program, projects and activities.</td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 3)
                        <td class="td-form" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">2.</td>
                <td class="td-form">Relevance of the SAS Program to students’ welfare and development.</td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 4)
                        <td class="td-form" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">3.</td>
                <td class="td-form">Consistency of the SAS Program with the PUP mission and vision.</td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 5)
                        <td class="td-form" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">4.</td>
                <td class="td-form">Consistency of the SAS Program with the College goals and curricular program objectives.</td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 6)
                        <td class="td-form" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">5.</td>
                <td class="td-form">Dissemination of the SAS Program, projects and activities.</td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 7)
                        <td class="td-form" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">6.</td>
                <td class="td-form">Qualification of heads and administrative support staff of SAS offices.</td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 8)
                        <td class="td-form" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">7.</td>
                <td class="td-form">Management and supervision of SAS program.</td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 9)
                        <td class="td-form" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">8.</td>
                <td class="td-form">Implementation of the SAS program.</td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 10)
                        <td class="td-form" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">9.</td>
                <td class="td-form">Responsiveness of the SAS program to students’ welfare and development.</td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 11)
                        <td class="td-form" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">10.</td>
                <td class="td-form">Adequacy of administrative support personnel for SAS.</td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 12)
                        <td class="td-form" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">11.</td>
                <td class="td-form">Proximity of SAS offices.</td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 13)
                        <td class="td-form" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">12.</td>
                <td class="td-form">Promptness of student services and transactions.</td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 14)
                        <td class="td-form" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">13.</td>
                <td class="td-form">Courtesy of administrative support personnel.</td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 15)
                        <td class="td-form" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">14.</td>
                <td class="td-form">Adequacy of physical facilities for SAS program, projects and activities.</td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 16)
                        <td class="td-form" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">15.</td>
                <td class="td-form">Adequacy of equipment and materials for SAS.</td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 17)
                        <td class="td-form" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">16.</td>
                <td class="td-form">Efficiency of student services and transactions.</td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 18)
                        <td class="td-form" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">17.</td>
                <td class="td-form">Transparency and accountability in spending the budget for SAS.</td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 19)
                        <td class="td-form" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">18.</td>
                <td class="td-form">Monitoring of SAS program, projects and activities.</td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 20)
                        <td class="td-form" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">19.</td>
                <td class="td-form">Evaluation of the SAS program, projects and activities.</td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 21)
                        <td class="td-form" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">20.</td>
                <td class="td-form">Conduct research on SAS program, projects and activities.</td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 22)
                        <td class="td-form" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">21.</td>
                <td class="td-form">Dissemination and utilization of research results and outputs.</td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 23)
                        <td class="td-form" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">22.</td>
                <td class="td-form">Rewards and incentives for excellence in SAS.</td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 24)
                        <td class="td-form" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
        </table>
        {{-- Section 2 --}}
        <table style="width:100%; margin-top: 20px;" class="table-form">
            <tr>
                <th colspan="2" class="th-form">ADMISSION SERVICES</th>
                <th colspan="1" class="th-form">Rating</th>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">23.</td>
                <td class="td-form">Dissemination of policy on student recruitment, selection, admission and retention.</td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 25)
                        <td class="td-form" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">24.</td>
                <td class="td-form">System of student recruitment, selection and admission.</td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 26)
                        <td class="td-form" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">25.</td>
                <td class="td-form">Implementation of the policy on student retentions.</td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 27)
                        <td class="td-form" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">26.</td>
                <td class="td-form">Processing of students’ entrance and requirements.</td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 28)
                        <td class="td-form" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
        </table>
        {{-- Section 3 --}}
        <table style="width:100%; margin-top: 20px;" class="table-form">
            <tr>
                <th colspan="2" class="th-form">INFORMATION AND ORIENTATION SERVICES</th>
                <th colspan="1" class="th-form">Rating</th>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">27.</td>
                <td class="td-form">Availability of informational materials on the University’s mission and vision.</td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 29)
                        <td class="td-form" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">28.</td>
                <td class="td-form">Availability of informational materials on College goals and program objectives.</td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 30)
                        <td class="td-form" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">29.</td>
                <td class="td-form">Accessibility of informational materials on academic rules and regulations, student conduct and discipline.</td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 31)
                        <td class="td-form" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">30.</td>
                <td class="td-form">Orientation of new students.</td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 32)
                        <td class="td-form" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">31.</td>
                <td class="td-form">Orientation of returning and continuing students.</td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 33)
                        <td class="td-form" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">32.</td>
                <td class="td-form">Availability of educational, career and social reading materials.</td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 34)
                        <td class="td-form" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
        </table>
        {{-- Section 4 --}}
        <table style="width:100%; margin-top: 20px;" class="table-form">
            <tr>
                <th colspan="2" class="th-form">SCHOLARSHIP AND FINANCIAL ASSISTANCE</th>
                <th colspan="1" class="th-form">Rating</th>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">33.</td>
                <td class="td-form">Accessibility of informational materials about scholarships, study grants and other schemes of financial aides.</td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 35)
                        <td class="td-form" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">34.</td>
                <td class="td-form">Implementation of the policy on scholarship, study grants and other schemes of financial aide.</td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 36)
                        <td class="td-form" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">35.</td>
                <td class="td-form">Monitoring of the performance of recipients of scholarship, study grants and other schemes of financial aides.</td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 37)
                        <td class="td-form" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">36.</td>
                <td class="td-form">Generation of funds for scholarship, study grants and other financial aides.</td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 38)
                        <td class="td-form" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
        </table>
        {{-- Section 5 --}}
        <table style="width:100%; margin-top: 20px;" class="table-form">
            <tr>
                <th colspan="2" class="th-form">HEALTH SERVICES</th>
                <th colspan="1" class="th-form">Rating</th>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">37.</td>
                <td class="td-form">Dissemination of health services program, projects and activities.</td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 39)
                        <td class="td-form" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">38.</td>
                <td class="td-form">Adequacy of medical services.</td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 40)
                        <td class="td-form" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">39.</td>
                <td class="td-form">Adequacy of dental services.</td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 41)
                        <td class="td-form" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">40.</td>
                <td class="td-form">Competence of medical and dental personnel.</td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 42)
                        <td class="td-form" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">41.</td>
                <td class="td-form">Adequacy of medical and dental facilities, equipment and supplies.</td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 43)
                        <td class="td-form" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">42.</td>
                <td class="td-form">Promptness of medical and dental services.</td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 44)
                        <td class="td-form" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
        </table>
        {{-- Section 6 --}}
        <table style="width:100%; margin-top: 20px;" class="table-form">
            <tr>
                <th colspan="2" class="th-form">GUIDANCE AND COUNSELING SERVICES</th>
                <th colspan="1" class="th-form">Rating</th>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">43.</td>
                <td class="td-form">Appraisal system for student’s attributes, adaptability, and competence.</td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 45)
                        <td class="td-form" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">44.</td>
                <td class="td-form">Availability of counseling services.</td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 46)
                        <td class="td-form" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">45.</td>
                <td class="td-form">Maintenance of confidential records by the guidance counselors.</td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 47)
                        <td class="td-form" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">46.</td>
                <td class="td-form">Availability of counseling rooms.</td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 48)
                        <td class="td-form" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">47.</td>
                <td class="td-form">Monitoring of the effectiveness of guidance and placement activities.</td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 49)
                        <td class="td-form" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
        </table>
        {{-- Section 7 --}}
        <table style="width:100%; margin-top: 20px;" class="table-form">
            <tr>
                <th colspan="2" class="th-form">FOOD SERVICES</th>
                <th colspan="1" class="th-form">Rating</th>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">48.</td>
                <td class="td-form">Management of safety and sanitary conditions of canteen and food outlets.</td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 50)
                        <td class="td-form" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">49.</td>
                <td class="td-form">Coordination of the food safety of food services outside the school premises with the local government.</td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 51)
                        <td class="td-form" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">50.</td>
                <td class="td-form">Nutrition of meals served in the canteen and food outlets.</td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 52)
                        <td class="td-form" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">51.</td>
                <td class="td-form">Affordability and reasonableness of prices of the meals in the canteen and food outlets.</td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 53)
                        <td class="td-form" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">52.</td>
                <td class="td-form">Personal hygiene of canteen and food outlets personnel.</td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 54)
                        <td class="td-form" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
        </table>
        {{-- Section 8 --}}
        <table style="width:100%; margin-top: 20px;" class="table-form">
            <tr>
                <th colspan="2" class="th-form">CAREER AND PLACEMENT SERVICES</th>
                <th colspan="1" class="th-form">Rating</th>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">53.</td>
                <td class="td-form">Availability of informational materials about career and employment opportunities.</td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 55)
                        <td class="td-form" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">54.</td>
                <td class="td-form">Appraisal of students for career and job placement.</td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 56)
                        <td class="td-form" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">55.</td>
                <td class="td-form">Provision for career seminar and job placement services.</td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 57)
                        <td class="td-form" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">56.</td>
                <td class="td-form">Linkages and networks for possible career and job placement.</td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 58)
                        <td class="td-form" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">57.</td>
                <td class="td-form">Monitoring of student placement provided.</td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 59)
                        <td class="td-form" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
        </table>
        {{-- Section 9 --}}
        <table style="width:100%; margin-top: 20px;" class="table-form">
            <tr>
                <th colspan="2" class="th-form">SAFETY AND SECURITY SERVICES</th>
                <th colspan="1" class="th-form">Rating</th>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">58.</td>
                <td class="td-form">Competence of security personnel.</td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 60)
                        <td class="td-form" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">59.</td>
                <td class="td-form">Care of safety and security of students and students’ belongings.</td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 61)
                        <td class="td-form" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">60.</td>
                <td class="td-form">Maintenance of safety and security of school environment, buildings and facilities.</td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 62)
                        <td class="td-form" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
        </table>
        {{-- Section 10 --}}
        <table style="width:100%; margin-top: 20px;" class="table-form">
            <tr>
                <th colspan="2" class="th-form">STUDENT DISCIPLINE</th>
                <th colspan="1" class="th-form">Rating</th>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">61.</td>
                <td class="td-form">Dissemination of gender sensitive rules and regulations.</td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 63)
                        <td class="td-form" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">62.</td>
                <td class="td-form">Definition of appropriate student conduct.</td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 64)
                        <td class="td-form" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">63.</td>
                <td class="td-form">Sanctions for student misconduct.</td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 65)
                        <td class="td-form" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
        </table>
        {{-- Section 11 --}}
        <table style="width:100%; margin-top: 20px;" class="table-form">
            <tr>
                <th colspan="2" class="th-form">SERVICES FOR STUDENTS WITH SPECIAL NEEDS</th>
                <th colspan="1" class="th-form">Rating</th>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">64.</td>
                <td class="td-form">Accommodation of students with disabilities and learners with special needs.</td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 66)
                        <td class="td-form" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">65.</td>
                <td class="td-form">Provision of facilities for students with disabilities.</td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 67)
                        <td class="td-form" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">66.</td>
                <td class="td-form">Provision of life skills training like conflict management and counseling.</td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 68)
                        <td class="td-form" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
        </table>
        {{-- Section 12 --}}
        <table style="width:100%; margin-top: 20px;" class="table-form">
            <tr>
                <th colspan="2" class="th-form">STUDENT ORGANIZATIONS AND ACTIVITIES</th>
                <th colspan="1" class="th-form">Rating</th>
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">67.</td>
                <td class="td-form">System of accreditation and recognition of student organizations.</td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 69)
                        <td class="td-form" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">68.</td>
                <td class="td-form">Dissemination of requirements and procedure for accreditation of student groups.</td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 70)
                        <td class="td-form" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">69.</td>
                <td class="td-form">Provision of office space and other school support for accredited student group.</td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 71)
                        <td class="td-form" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">70.</td>
                <td class="td-form">Mechanism for student organizations to coordinate with school administration.</td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 72)
                        <td class="td-form" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">71.</td>
                <td class="td-form">Provision of leadership trainings.</td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 73)
                        <td class="td-form" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">72.</td>
                <td class="td-form">Opportunity to interact with other student organizations from other schools.</td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 74)
                        <td class="td-form" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">73.</td>
                <td class="td-form">Recognition of the students the right to govern themselves.</td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 75)
                        <td class="td-form" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <td class="td-form" style="width: 20px;">74.</td>
                <td class="td-form">Opportunity to represent students in student council and board of regents.</td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 76)
                        <td class="td-form" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
