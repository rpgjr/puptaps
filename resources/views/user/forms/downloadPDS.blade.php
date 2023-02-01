<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Download PDS Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: "Times New Roman", Times, serif;
        }

        .pdf-header {
            font-size: 18px;
        }

        .table-form, .th-form, .td-form {
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
            margin-left: 90px;
            margin-right: 15px;
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
                <p class="my-1">Polytechnic University of the Philippines</p>
                <p class="my-1">Office of the Vice President for Student Services</p>
                <p class="my-1">CAREER DEVELOPMENT AND PLACEMENT OFFICE</p>
            </div>
        </div>
    </div>

    <h4 class="mt-4 mb-5 text-center text-decoration-underline">PERSONAL DATA SHEET</h4>

    @foreach ($users as $user)
    <table class="w-100">
        <tr>
            <tr>
                <th colspan="1" style="width: 7%; font-weight: bold;">Name: </th>
                <td colspan="1" style="text-align: center; width: 31%">{{$user->last_name}}</td>
                <td colspan="1" style="text-align: center; width: 31%">{{$user->first_name}} {{$user->suffix}}</td>
                <td colspan="1" style="text-align: center; width: 31%">{{$user->middle_name}}</td>
            </tr>
            <tr>
                <td></td>
                <td style="text-align: center; font-size:13px; border-top: 1px solid black;">Surname</td>
                <td style="text-align: center; font-size:13px; border-top: 1px solid black;">First Name</td>
                <td style="text-align: center; font-size:13px; border-top: 1px solid black;">Middle Name</td>
            </tr>
        </tr>
    </table>
    <table class="w-100 mt-3">
        <tr>
            <th colspan="1" style="width: 14%; font-weight: bold;">Date of Birth: </th>
            <td colspan="1" style="width: 20%; border-bottom: 1px solid black;">{{ date('F d, Y', strtotime($user->birthday)) }}</td>
            <td colspan="1" style="width: 36%;"></td>
            <th colspan="1" style="width: 5%; font-weight: bold;">Age: </th>
            <td colspan="1" style="width: 25%; border-bottom: 1px solid black;">{{ $user->age }} years old</td>
        </tr>
    </table>
    <table class="w-100 mt-3">
        <tr>
            <th colspan="1" style="width: 5%; font-weight: bold;">Sex: </th>
            <td colspan="1" style="border-bottom: 1px solid black; width: 29%;">{{ $user->sex }}</td>
            <td colspan="1" style="width: 32%;"></td>
            <th colspan="1" style="width: 9%; font-weight: bold;">Religion: </th>
            <td colspan="1" style="border-bottom: 1px solid black; width: 25%;">{{ $user->religion }}</td>
        </tr>
    </table>
    <?php
        $course_text = $user->course_id;
        foreach ($courses as $course) {
            if($course->course_id == $user->course_id) {
                $course_text = $course->course_desc;
            }
        }
    ?>
    <table class="w-100 mt-3">
        <tr>
            <th colspan="1" style="width: 16%; font-weight: bold;">Degree/Course: </th>
            <td colspan="1" style="border-bottom: 1px solid black; width: 84%;">{{ $course_text }}</td>
        </tr>
    </table>
    <table class="w-100 mt-3">
        <tr>
            <th colspan="1" style="width: 17%; font-weight: bold;">Year Graduated: </th>
            <td colspan="1" style="border-bottom: 1px solid black; width: 8%;">{{ $user->batch }}</td>
            <td style="width: 75%;"></td>
        </tr>
    </table>
    <table class="w-100 mt-3">
        <tr>
            <th colspan="1" style="width: 14%">City Address: </th>
            <td colspan="1" style="border-bottom: 1px solid black; width: 86%;">{{ $user->city_address }}</td>
        </tr>
    </table>
    <table class="w-100 mt-3">
        <tr>
            <th colspan="1" style="width: 19%">Provincial Address: </th>
            <td colspan="1" style="border-bottom: 1px solid black; width: 81%;">{{ $user->provincial_address }}</td>
        </tr>
    </table>
    <table class="w-100 mt-3">
        <tr>
            <th colspan="1" style="width: 15%">Email Address: </th>
            <td colspan="1" style="border-bottom: 1px solid black; width: 39%;">{{ $user->email }}</td>
            <td colspan="1" style="width: 10%;"></td>
            <th colspan="1" style="width: 17%;">Landline/Mobile: </th>
            <td colspan="1" style="border-bottom: 1px solid black; width: 19%;">{{ $user->number }}</td>
        </tr>
    </table>
    @endforeach

    <div class="w-100">
        <table class="w-100 mt-3">
                <tr>
                    <th colspan="1" style="width: 15%">Father's Name: </th>
                    @foreach ($userAnswers as $answers)
                        @if ($answers->question_id == 2)
                            <td colspan="1" style="width: 39%; border-bottom: 1px solid black;">{{ $answers->answer }}</td>
                        @endif
                    @endforeach
                    <td style="width: 10%"></td>
                    <th colspan="1" style="width: 18%">Father's Number: </th>
                    @foreach ($userAnswers as $answers)
                        @if ($answers->question_id == 3)
                            <td colspan="1" style="width: 18%; border-bottom: 1px solid black;">{{ $answers->answer }}</td>
                        @endif
                    @endforeach
                </tr>
        </table>
        <table class="w-100 mt-3">
            <tr>
                <th colspan="1" style="width: 16%">Mother's Name: </th>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 4)
                        <td colspan="1" style="width: 38%; border-bottom: 1px solid black;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
                <td style="width: 10%"></td>
                <th colspan="1" style="width: 18%">Mother's Number: </th>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 5)
                        <td colspan="1" style="width: 18%; border-bottom: 1px solid black;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
        </table>
    </div>

    <h3 class="mt-4">Work Experience/s:</h3>
    <table class="table-form w-100">
        <tr>
            <th class="th-form" colspan="1">Department / Agency / Office</th>
            <th class="th-form" colspan="1">Position</th>
            <th class="th-form" colspan="1">Inclusive Dates</th>
        </tr>
        <tr>
            @foreach ($userAnswers as $answers)
                @if ($answers->question_id == 6 || $answers->question_id == 7 || $answers->question_id == 8)
                    <td class="td-form">{{ $answers->answer }}</td>
                @endif
            @endforeach
        </tr>
    </table>

    <h3 class="mt-4">Trainings / Seminars Attended:</h3>
    <table class="table-form w-100">
        <tr>
            <th class="th-form" colspan="1">Title of Seminar / Conference / Workshop</th>
            <th class="th-form" colspan="1" style="width: 210px;">Inclusive Dates</th>
        </tr>
        <tr>
            @foreach ($userAnswers as $answers)
                @if ($answers->question_id == 9 || $answers->question_id == 10)
                    <td class="td-form">{{ $answers->answer }}</td>
                @endif
            @endforeach
        </tr>
        <tr>
            @foreach ($userAnswers as $answers)
                @if ($answers->question_id == 11 || $answers->question_id == 12)
                    <td class="td-form">{{ $answers->answer }}</td>
                @endif
            @endforeach
        </tr>
        <tr>
            @foreach ($userAnswers as $answers)
                @if ($answers->question_id == 13 || $answers->question_id == 14)
                    <td class="td-form">{{ $answers->answer }}</td>
                @endif
            @endforeach
        </tr>
    </table>

    <div class="mt-3">
        <p style="text-align: center;">I hereby certify that all information provided are true and correct to the best of my knowledge.</p>
        <table style="width:100%; margin-top: 30px;">
            <tr>
                <td></td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 16)
                        <td colspan="1" style="width: 40%; text-align: center; text-transform: uppercase;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <td></td>
                <td colspan="1" style="width: 40%; text-align: center; border-top: 1px solid black;">
                    Signature over Printed Name
                </td>
            </tr>
        </table>
    </div>

    <div class="mt-5">
        <h4><u><center>WAIVER</center></u></h4>
        <p >This is to signify that I am willing to be subjected to company calls for placement or employment purposes. This shall also authorize the Polytechnic University of The Philippines – Career Development and Placement Office (PUP-CDPO) to include my name and contact details in the directory of graduates.
        </p>
        <table style="width:100%; margin-top: 30px;">
            <tr>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 15)
                        <td colspan="1" style="width: 40%; text-align: center; text-transform: uppercase;">
                            {{ date('F d, Y', strtotime($answers->answer)) }}
                        </td>
                    @endif
                @endforeach
                <td></td>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 16)
                        <td colspan="1" style="width: 40%; text-align: center; text-transform: uppercase;">
                            {{ $answers->answer }}
                        </td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <td colspan="1" style="width: 40%; text-align: center; border-top: 1px solid black;">
                    Date
                </td>
                <td></td>
                <td colspan="1" style="width: 40%; text-align: center; border-top: 1px solid black;">
                    Signature over Printed Name
                </td>
            </tr>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
