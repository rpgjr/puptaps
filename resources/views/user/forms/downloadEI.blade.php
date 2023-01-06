<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Download Exit Interview Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

    <style>
        body {
            font-family: "Times New Roman", Times, serif;
        }

        .pdf-header {
            font-size: 18px;
        }

        .table-EI, .th-EI, .td-EI {
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

        .container {
            display: block;
            position: relative;
            padding-left: 35px;
            margin-bottom: 10px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        .container input {
            position: absolute;
            opacity: 0;
            height: 0;
            width: 0;
        }

        /* Create a custom checkbox */
        .checkmark {
            position: absolute;
            top: 0;
            left: 0;
            height: 25px;
            width: 25px;
            background-color: #eee;
            border-radius: 50%;
        }

        /* When the checkbox is checked, add a blue background */
        .container input:checked ~ .checkmark {
            background-color: #2196F3;
        }

        /* Create the checkmark/indicator (hidden when not checked) */
        .checkmark:after {
            content: "";
            position: absolute;
            display: none;
        }

        /* Show the checkmark when checked */
        .container input:checked ~ .checkmark:after {
            display: block;
        }

        /* Style the checkmark/indicator */
            .container .checkmark:after {
            left: 9px;
            top: 5px;
            width: 5px;
            height: 10px;
            border: solid white;
            border-width: 0 3px 3px 0;
            -webkit-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            transform: rotate(45deg);
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

    <h4 class="mt-4 mb-5 text-center text-decoration-underline">EXIT INTERVIEW FORM</h4>

    <div class="user">
        @foreach ($users as $user)
        <h4 class="mb-4 text-decoration-underline">PERSONAL INFORMATION</h4>
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
                <th colspan="1" style="width: 4%; font-weight: bold;">Sex: </th>
                <td colspan="1" style="width: 16%; border-bottom: 1px solid black;">{{ $user->sex }}</td>
                <td colspan="1" style="width: 15%;"></td>
                <th colspan="1" style="width: 5%; font-weight: bold;">Age: </th>
                <td colspan="1" style="width: 20%; border-bottom: 1px solid black;">{{ $user->age }} years old</td>
                <td colspan="1" style="width: 13%;"></td>
                <th colspan="1" style="width: 12%; font-weight: bold;">Civil Status: </th>
                <td colspan="1" style="width: 15%; border-bottom: 1px solid black;">{{ $user->civil_status }}</td>
            </tr>
        </table>
        <table class="w-100 mt-3">
            <tr>
                <th colspan="1" style="width: 15%; font-weight: bold;">Email Address: </th>
                <td colspan="1" style="width: 30%; border-bottom: 1px solid black;">{{ $user->email }}</td>
                <td colspan="1" style="width: 20%;"></td>
                <th colspan="1" style="width: 13%; font-weight: bold;">Contact No.: </th>
                <td colspan="1" style="width: 22%; border-bottom: 1px solid black;">{{ $user->number }}</td>
            </tr>
        </table>
        <table class="w-100 mt-3">
            <tr>
                <th colspan="1" style="width: 14%">City Address: </th>
                <td colspan="1" style="border-bottom: 1px solid black; width: 86%;">{{ $user->city_address }}</td>
            </tr>
        </table>
        @foreach ($userAnswers as $answers)
            @if ($answers->question_id == 2)
                <table class="w-100 mt-3">
                    <tr>
                        <th colspan="1" style="width: 105px;">If Employed: </th>
                        <td colspan="3" style="text-align: center;">
                            {{ $answers->answer }}
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td style="text-align: center; font-size:13px; border-top: 1px solid black;">Position</td>
                        <td style="text-align: center; font-size:13px; border-top: 1px solid black;">Company/Company Address</td>
                        <td style="text-align: center; font-size:13px; border-top: 1px solid black;">Telephone Number</td>
                    </tr>
                </table>
            @endif

            @if($answers->question_id == 3)
                <h4 class="mb-4 mt-4 text-decoration-underline">EXIT SURVEY</h4>
                <p><i>Please answer all the items honestly.</i></p>
                <p><b>1.</b> Reason/s for leaving PUP (Put a check on the box of your choice/s).</p>

                <table class="w-100 mt-3">
                    <tr>
                        <td colspan="1" >
                            <label class="container">Graduation
                                <input type="checkbox"
                                @if (str_contains($answers->answer, "Graduation"))
                                    checked
                                @endif>
                                <span class="checkmark"></span>
                            </label>
                            <label class="container">Personal
                                <input type="checkbox"
                                @if (str_contains($answers->answer, "Personal"))
                                    checked
                                @endif>
                                <span class="checkmark"></span>
                            </label>
                            <label class="container">Family
                                <input type="checkbox"
                                @if (str_contains($answers->answer, "Family"))
                                    checked
                                @endif>
                                <span class="checkmark"></span>
                            </label>
                            <label class="container">Academic
                                <input type="checkbox"
                                @if (str_contains($answers->answer, "Academic"))
                                    checked
                                @endif>
                                <span class="checkmark"></span>
                            </label>
                        </td>
                        <td colspan="1">
                            <label class="container">Financial
                                <input type="checkbox"
                                @if (str_contains($answers->answer, "Financial"))
                                    checked
                                @endif>
                                <span class="checkmark"></span>
                            </label>
                            <label class="container">Work-related
                                <input type="checkbox"
                                @if (str_contains($answers->answer, "Work-related"))
                                    checked
                                @endif>
                                <span class="checkmark"></span>
                            </label>
                            <label class="container">Others
                                <input type="checkbox"
                                @if (str_contains($answers->answer, "Others"))
                                    checked
                                @endif>
                                <span class="checkmark"></span>
                            </label>
                        </td>
                    </tr>
                </table>
            @endif
        @endforeach
        @endforeach
        <p class="mt-4 mb-0"><b>2.</b>  Please rate the following items by writing your choice number on the box provided:</p>
        <br>
        <p class="mt-0">Legend:</p>
        <ul class="legend">
            <li>5 - Outstanding</li>
            <li>4 - Very Satisfactory </li>
            <li>3 - Satisfactory</li>
            <li>2 - Fair</li>
            <li>1 - Poor</li>
        </ul>
        <table class="table-EI" style="width:100%;">
            <tr>
                <td class="th-EI" colspan="1"></td>
                <th class="th-EI" colspan="1" style="width: 70px; text-align:center;">Ratings</th>
            </tr>
            <tr>
                <th class="td-EI">Academic Standard</th>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 4)
                        <td class="td-EI" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <th class="td-EI">School Activities</th>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 4)
                        <td class="td-EI" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <th class="td-EI">Faculty/Teacher</th>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 4)
                        <td class="td-EI" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <th class="td-EI">Facilities</th>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 4)
                        <td class="td-EI" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <th class="td-EI">Course Taken</th>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 4)
                        <td class="td-EI" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <th class="td-EI">Student Organization/s</th>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 4)
                        <td class="td-EI" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <th class="td-EI">Classmates</th>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 4)
                        <td class="td-EI" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
        </table>

        <p class="mt-4"><b>3.</b> Please rate the services (quality and timeliness of service, and courtesy of staff) provided to you by the following offices (please rate by writing the  number corresponding your rating):</p>
        <p>Legend:</p>
        <ul class="legend">
            <li>5 - Outstanding</li>
            <li>4 - Very Satisfactory </li>
            <li>3 - Satisfactory</li>
            <li>2 - Fair</li>
            <li>1 - Poor</li>
        </ul>
        <table class="table-EI" style="width:100%;">
            <tr>
                <th class="th-EI" colspan="1" style="width: 60%; text-align:center;">PUP Taguig Offices</th>
                <th class="th-EI" colspan="1" style="width: 15%; text-align:center;">Quality of Service</th>
                <th class="th-EI" colspan="1" style="width: 15%; text-align:center;">Timeliness of Service</th>
                <th class="th-EI" colspan="1" style="width: 15%; text-align:center;">Courtesy of Staff</th>
            </tr>
            <tr>
                <th class="td-EI">Director’s Office</th>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 11 || $answers->question_id == 12 || $answers->question_id == 13)
                        <td class="td-EI" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <th class="td-EI">Office of the Head of Academic Programs</th>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 14 || $answers->question_id == 15 || $answers->question_id == 16)
                        <td class="td-EI" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <th class="td-EI">Administrative Office</th>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 17 || $answers->question_id == 18 || $answers->question_id == 19)
                        <td class="td-EI" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <th class="td-EI">Accounting/Cashier’s Office</th>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 20 || $answers->question_id == 21 || $answers->question_id == 22)
                        <td class="td-EI" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <th class="td-EI">Office of Student Services/Scholarship</th>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 23 || $answers->question_id == 24 || $answers->question_id == 25)
                        <td class="td-EI" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <th class="td-EI">Admission/Registration Office</th>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 26 || $answers->question_id == 27 || $answers->question_id == 28)
                        <td class="td-EI" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <th class="td-EI">Guidance and Counseling Office</th>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 29 || $answers->question_id == 30 || $answers->question_id == 31)
                        <td class="td-EI" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <th class="td-EI">Library Services</th>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 32 || $answers->question_id == 33 || $answers->question_id == 34)
                        <td class="td-EI" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <th class="td-EI">Medical Services</th>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 35 || $answers->question_id == 36 || $answers->question_id == 37)
                        <td class="td-EI" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <th class="td-EI">Dental Services</th>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 38 || $answers->question_id == 39 || $answers->question_id == 40)
                        <td class="td-EI" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <th class="td-EI">Security Office</th>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 41 || $answers->question_id == 42 || $answers->question_id == 43)
                        <td class="td-EI" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <th class="td-EI">Janitorial Service</th>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 44 || $answers->question_id == 45 || $answers->question_id == 46)
                        <td class="td-EI" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
        </table>

        <p class="mt-4"><b>4.</b> Overall evaluation on the following by writing your choice number on the box provided:</p>
        <p>Legend:</p>
        <ul class="legend">
            <li>5 - Outstanding</li>
            <li>4 - Very Satisfactory </li>
            <li>3 - Satisfactory</li>
            <li>2 - Fair</li>
            <li>1 - Poor</li>
        </ul>
        <table class="table-EI" style="width:100%;">
            <tr>
                <th class="th-EI" colspan="1" style="text-align: center; ">Overall</th>
                <th class="th-EI" colspan="1" style="text-align: center; width: 70px;">Ratings</th>
            </tr>
            <tr>
                <th class="td-EI"> PUP Taguig Systems and Procedures</th>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 47)
                        <td class="td-EI" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <th class="td-EI">PUP Taguig Programs / Courses</th>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 48)
                        <td class="td-EI" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
            <tr>
                <th class="td-EI">PUP Taguig Services</th>
                @foreach ($userAnswers as $answers)
                    @if ($answers->question_id == 49)
                        <td class="td-EI" style="text-align: center;">{{ $answers->answer }}</td>
                    @endif
                @endforeach
            </tr>
        </table>

        <div class="mt-5 w-100">
            <p><b>5.</b> Give your comments/suggestions/recommendations for the improvement of PUP Taguig.</p>
            <table style="width:100%;">
                <tr>
                    @foreach ($userAnswers as $answers)
                        @if ($answers->question_id == 50)
                            <td colspan="1" style="word-spacing: 5px; line-height: 25px; text-indent: 50px; text-align: justify;">{{ $answers->answer }}</td>
                        @endif
                    @endforeach
                </tr>
            </table>
            <table class="mt-5 w-100">
                <tr>
                    <td></td>
                    @foreach ($userAnswers as $answers)
                        @if ($answers->question_id == 52)
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
        {{--
        <div class="fifth-item" style="margin-top: 20px;">
            <p><b>5.</b> Give your comments/suggestions/recommendations for the improvement of PUP Taguig.</p>
            <table style="width:100%;">
                <tr>
                    <td colspan="1" style="word-spacing: 5px; line-height: 25px; text-indent: 50px; text-align: justify;">{{ $exit->comment }}</td>
                </tr>
            </table>
            <table style="width:100%; margin-top: 60px;">
                <tr>
                    <td></td>
                    <td colspan="1" style="width: 40%; text-align: center; text-transform: uppercase;">
                        {{ $exit->signature }}
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="1" style="width: 40%; text-align: center; border-top: 1px solid black;">
                        Signature over Printed Name
                    </td>
                </tr>
            </table>
        </div>
        @endforeach --}}
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
