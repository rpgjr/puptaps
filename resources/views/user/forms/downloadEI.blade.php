<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Download Exit Interview Form</title>

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

        .title-pds {
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

        .table-EI, .th-EI, .td-EI {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }

        .user {
            font-size: 18px;
            margin-top: 50px;
        }

        .user div {
            margin-left: 50px;
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
        }

        /* On mouse-over, add a grey background color */
        .container:hover input ~ .checkmark {
            background-color: #ccc;
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
            text-align: left;
        }

        .legend li {
            font-weight: bold;
            font-size: 17px;
            padding: 8px;
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

    <h4 class="title-pds"><u>EXIT INTERVIEW FORM</u></h4>

    <div class="user">
        @foreach ($users as $user)
        <p><u><b>PERSONAL INFORMATION</b></u></p>
        <table style="width:100%">
            <tr>
                <th colspan="1" style="width: 55px;">Name: </th>
                <td colspan="1" style="text-align: center;">{{ $user->last_name }}</td>
                <td colspan="1" style="text-align: center;">{{ $user->first_name }} {{ $user->suffix }}</td>
                <td colspan="1" style="text-align: center;">{{ $user->middle_name }}</td>
                <td colspan="1" style="width: 30px;"></td>
                <th colspan="1" style="width: 70px;">Gender: </th>
                <td colspan="1" style="width: 70px;">{{ $user->gender }}</td>
            </tr>
            <tr>
                <td></td>
                <td style="text-align: center; font-size:13px; border-top: 1px solid black;">Surname</td>
                <td style="text-align: center; font-size:13px; border-top: 1px solid black;">First Name</td>
                <td style="text-align: center; font-size:13px; border-top: 1px solid black;">Middle Name</td>
                <td></td>
                <td></td>
                <td style="border-top: 1px solid black;"></td>
            </tr>
        </table>
        <table style="width:100%; margin-top: 10px;">
            <tr>
                <th colspan="1" style="width: 15%">Date of Birth: </th>
                <td colspan="1" style="border-bottom: 1px solid black; width: 20%;">{{ date('F d, Y', strtotime($user->birthday)) }}</td>
                <td colspan="1" style="width: 5%;"></td>
                <th colspan="1" style="width: 6%;">Age: </th>
                <td colspan="1" style="border-bottom: 1px solid black; width: 7%;">{{ $user->age }}</td>
                <td colspan="1" style="width: 5%;"></td>
                <th colspan="1" style="width: 10%;">Religion: </th>
                <td colspan="1" style="border-bottom: 1px solid black; width: 25%;">{{ $user->religion }}</td>
            </tr>
        </table>
        <table style="width:100%; margin-top: 10px;">
            <tr>
                <th colspan="1" style="width: 19%">Degree/Course: </th>
                <td colspan="1" style="border-bottom: 1px solid black; width: 50%;">{{ $user->course_ID }}</td>
                <td colspan="1" style="width: 5%;"></td>
                <th colspan="1" style="width: 25%;">Student Number: </th>
                <td colspan="1" style="border-bottom: 1px solid black; width: 30%;">{{ $user->stud_number }}</td>
            </tr>
        </table>
        <table style="width:100%; margin-top: 10px;">
            <tr>
                <th colspan="1" style="width: 20%">City Address: </th>
                <td colspan="1" style="border-bottom: 1px solid black; width: 105%;">{{ $user->city_address }}</td>
            </tr>
        </table>
        <table style="width:100%; margin-top: 10px;">
            <tr>
                <th colspan="1" style="width: 8%">Email: </th>
                <td colspan="1" style="border-bottom: 1px solid black; width: 30%;">{{ $user->email }}</td>
                <td colspan="1" style="width: 5%;"></td>
                <th colspan="1" style="width: 15%;">Contact No.: </th>
                <td colspan="1" style="border-bottom: 1px solid black; width: 15%;">{{ $user->number }}</td>
                <td colspan="1" style="width: 5%;"></td>
                <th colspan="1" style="width: 15%;">Civil Status: </th>
                <td colspan="1" style="border-bottom: 1px solid black; width: 11%;">{{ $user->civil_status }}</td>
            </tr>
        </table>
        @foreach ($userEI as $exit)
        <table style="width:100%; margin-top: 10px;">
            <tr>
                <th colspan="1" style="width: 105px;">If Employed: </th>
                <td colspan="1" style="text-align: center;">
                    @if(($exit->employment_status) != null )
                        {{ $exit->employment_status }}
                    @endif
                </td>
            </tr>
            <tr>
                <td></td>
                <td style="text-align: center; font-size:13px; border-top: 1px solid black;">Position</td>
                <td style="text-align: center; font-size:13px; border-top: 1px solid black;">Company/Company Address</td>
                <td style="text-align: center; font-size:13px; border-top: 1px solid black;">Telephone Number</td>
            </tr>
        </table>
        @endforeach
        @endforeach

        @foreach ($userEI as $exit)
        <p style="margin-top: 40px;"><u><b>EXIT SURVEY</b></u></p>
        <p><i>Please answer all the items honestly.</i></p>


        <div class="first-item">
            <p><b>1.</b> Reason/s for leaving PUP (Put a check on the box of your choice/s).</p>
            <table style="width:100%;">
                <tr>
                    <td colspan="1" >
                        <label class="container">Graduation
                            <input type="checkbox"
                            @if (str_contains($exit->reason, "Graduation"))
                                checked
                            @endif>
                            <span class="checkmark"></span>
                        </label>
                        <label class="container">Personal
                            <input type="checkbox"
                            @if (str_contains($exit->reason, "Personal"))
                                checked
                            @endif>
                            <span class="checkmark"></span>
                        </label>
                        <label class="container">Family
                            <input type="checkbox"
                            @if (str_contains($exit->reason, "Family"))
                                checked
                            @endif>
                            <span class="checkmark"></span>
                        </label>
                        <label class="container">Academic
                            <input type="checkbox"
                            @if (str_contains($exit->reason, "Academic"))
                                checked
                            @endif>
                            <span class="checkmark"></span>
                        </label>
                    </td>
                    <td colspan="1">
                        <label class="container">Financial
                            <input type="checkbox"
                            @if (str_contains($exit->reason, "Financial"))
                                checked
                            @endif>
                            <span class="checkmark"></span>
                        </label>
                        <label class="container">Work-related
                            <input type="checkbox"
                            @if (str_contains($exit->reason, "Work-related"))
                                checked
                            @endif>
                            <span class="checkmark"></span>
                        </label>
                        <label class="container">Others
                            <input type="checkbox"
                            @if (str_contains($exit->reason, "Others"))
                                checked
                            @endif>
                            <span class="checkmark"></span>
                        </label>
                    </td>
                </tr>
            </table>
        </div>

        <div class="second-item" style="margin-top: 20px;">
            <p><b>2.</b>  Please rate the following items by writing your choice number on the box provided:</p>
            <br>
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
                    <td class="th-EI" colspan="1"></td>
                    <th class="th-EI" colspan="1" style="width: 70px; text-align:center;">Ratings</th>
                </tr>
                <tr>
                    <th class="td-EI">Academic Standard</th>
                    <td class="td-EI" style="text-align: center;">{{ $exit->sec1_q1 }}</td>
                </tr>
                <tr>
                    <th class="td-EI">School Activities</th>
                    <td class="td-EI" style="text-align: center;">{{ $exit->sec1_q2 }}</td>
                </tr>
                <tr>
                    <th class="td-EI">Faculty/Teacher</th>
                    <td class="td-EI" style="text-align: center;">{{ $exit->sec1_q3 }}</td>
                </tr>
                <tr>
                    <th class="td-EI">Facilities</th>
                    <td class="td-EI" style="text-align: center;">{{ $exit->sec1_q4 }}</td>
                </tr>
                <tr>
                    <th class="td-EI">Course Taken</th>
                    <td class="td-EI" style="text-align: center;">{{ $exit->sec1_q5 }}</td>
                </tr>
                <tr>
                    <th class="td-EI">Student Organization/s</th>
                    <td class="td-EI" style="text-align: center;">{{ $exit->sec1_q6 }}</td>
                </tr>
                <tr>
                    <th class="td-EI">Classmates</th>
                    <td class="td-EI" style="text-align: center;">{{ $exit->sec1_q7 }}</td>
                </tr>
            </table>
        </div>

        <div class="third-item" style="margin-top: 20px;">
            <p><b>3.</b> Please rate the services (quality and timeliness of service, and courtesy of staff) provided to you by the following offices (please rate by writing the  number corresponding your rating):</p>
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
                    <td class="td-EI" style="text-align: center;">{{ $exit->sec2_q1 }}</td>
                    <td class="td-EI" style="text-align: center;">{{ $exit->sec2_q2 }}</td>
                    <td class="td-EI" style="text-align: center;">{{ $exit->sec2_q3 }}</td>
                </tr>
                <tr>
                    <th class="td-EI">Office of the Head of Academic Programs</th>
                    <td class="td-EI" style="text-align: center;">{{ $exit->sec3_q1 }}</td>
                    <td class="td-EI" style="text-align: center;">{{ $exit->sec3_q2 }}</td>
                    <td class="td-EI" style="text-align: center;">{{ $exit->sec3_q3 }}</td>
                </tr>
                <tr>
                    <th class="td-EI">Administrative Office</th>
                    <td class="td-EI" style="text-align: center;">{{ $exit->sec4_q1 }}</td>
                    <td class="td-EI" style="text-align: center;">{{ $exit->sec4_q2 }}</td>
                    <td class="td-EI" style="text-align: center;">{{ $exit->sec4_q3 }}</td>
                </tr>
                <tr>
                    <th class="td-EI">Accounting/Cashier’s Office</th>
                    <td class="td-EI" style="text-align: center;">{{ $exit->sec5_q1 }}</td>
                    <td class="td-EI" style="text-align: center;">{{ $exit->sec5_q2 }}</td>
                    <td class="td-EI" style="text-align: center;">{{ $exit->sec5_q3 }}</td>
                </tr>
                <tr>
                    <th class="td-EI">Office of Student Services/Scholarship</th>
                    <td class="td-EI" style="text-align: center;">{{ $exit->sec6_q1 }}</td>
                    <td class="td-EI" style="text-align: center;">{{ $exit->sec6_q2 }}</td>
                    <td class="td-EI" style="text-align: center;">{{ $exit->sec6_q3 }}</td>
                </tr>
                <tr>
                    <th class="td-EI">Admission/Registration Office</th>
                    <td class="td-EI" style="text-align: center;">{{ $exit->sec7_q1 }}</td>
                    <td class="td-EI" style="text-align: center;">{{ $exit->sec7_q2 }}</td>
                    <td class="td-EI" style="text-align: center;">{{ $exit->sec7_q3 }}</td>
                </tr>
                <tr>
                    <th class="td-EI">Guidance and Counseling Office</th>
                    <td class="td-EI" style="text-align: center;">{{ $exit->sec8_q1 }}</td>
                    <td class="td-EI" style="text-align: center;">{{ $exit->sec8_q2 }}</td>
                    <td class="td-EI" style="text-align: center;">{{ $exit->sec8_q3 }}</td>
                </tr>
                <tr>
                    <th class="td-EI">Library Services</th>
                    <td class="td-EI" style="text-align: center;">{{ $exit->sec9_q1 }}</td>
                    <td class="td-EI" style="text-align: center;">{{ $exit->sec9_q2 }}</td>
                    <td class="td-EI" style="text-align: center;">{{ $exit->sec9_q3 }}</td>
                </tr>
                <tr>
                    <th class="td-EI">Medical Services</th>
                    <td class="td-EI" style="text-align: center;">{{ $exit->sec10_q1 }}</td>
                    <td class="td-EI" style="text-align: center;">{{ $exit->sec10_q2 }}</td>
                    <td class="td-EI" style="text-align: center;">{{ $exit->sec10_q3 }}</td>
                </tr>
                <tr>
                    <th class="td-EI">Dental Services</th>
                    <td class="td-EI" style="text-align: center;">{{ $exit->sec11_q1 }}</td>
                    <td class="td-EI" style="text-align: center;">{{ $exit->sec11_q2 }}</td>
                    <td class="td-EI" style="text-align: center;">{{ $exit->sec11_q3 }}</td>
                </tr>
                <tr>
                    <th class="td-EI">Security Office</th>
                    <td class="td-EI" style="text-align: center;">{{ $exit->sec12_q1 }}</td>
                    <td class="td-EI" style="text-align: center;">{{ $exit->sec12_q2 }}</td>
                    <td class="td-EI" style="text-align: center;">{{ $exit->sec12_q3 }}</td>
                </tr>
                <tr>
                    <th class="td-EI">Janitorial Service2</th>
                    <td class="td-EI" style="text-align: center;">{{ $exit->sec13_q1 }}</td>
                    <td class="td-EI" style="text-align: center;">{{ $exit->sec13_q2 }}</td>
                    <td class="td-EI" style="text-align: center;">{{ $exit->sec13_q3 }}</td>
                </tr>
            </table>
        </div>

        <div class="fourth-item" style="margin-top: 20px;">
            <p><b>4.</b> Overall evaluation on the following by writing your choice number on the box provided:</p>
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
                    <td class="td-EI" style="text-align: center;">{{ $exit->sec14_q1 }}</td>
                </tr>
                <tr>
                    <th class="td-EI">PUP Taguig Programs / Courses</th>
                    <td class="td-EI" style="text-align: center;">{{ $exit->sec14_q2 }}</td>
                </tr>
                <tr>
                    <th class="td-EI">PUP Taguig Services</th>
                    <td class="td-EI" style="text-align: center;">{{ $exit->sec14_q3 }}</td>
                </tr>
            </table>
        </div>

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
        @endforeach
    </div>
</body>
</html>
