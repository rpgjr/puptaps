<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Download PDS Form</title>

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

        .table-work, .th-work, .td-work {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }

        .user {
            font-size: 18px;
            margin-top: 50px;
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

    <h4 class="title-pds"><u>PERSONAL DATA SHEET</u></h4>

    <div class="user">
        @foreach ($users as $user)
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
                <th colspan="1" style="width: 21%;">Year Graduated: </th>
                <td colspan="1" style="border-bottom: 1px solid black; width: 10%;">{{ $user->batch }}</td>
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
                <th colspan="1" style="width: 30%">Provincial Address: </th>
                <td colspan="1" style="border-bottom: 1px solid black; width: 105%;">{{ $user->provincial_address }}</td>
            </tr>
        </table>
        <table style="width:100%; margin-top: 10px;">
            <tr>
                <th colspan="1" style="width: 19%">Email Address: </th>
                <td colspan="1" style="border-bottom: 1px solid black; width: 40%;">{{ $user->email }}</td>
                <td colspan="1" style="width: 5%;"></td>
                <th colspan="1" style="width: 21%;">Landline/Mobile: </th>
                <td colspan="1" style="border-bottom: 1px solid black; width: 20%;">{{ $user->number }}</td>
            </tr>
        </table>
        @endforeach

        @foreach ($userPDS as $pds)
        <table style="width:100%; margin-top: 10px;">
            <tr>
                <th colspan="1" style="width: 19%">Father's Name: </th>
                <td colspan="1" style="border-bottom: 1px solid black; width: 45%;">{{ $pds->fathers_name }}</td>
                <td colspan="1" style="width: 5%;"></td>
                <th colspan="1" style="width: 16%;">Father's No.: </th>
                <td colspan="1" style="border-bottom: 1px solid black; width: 20%;">{{ $pds->fathers_number }}</td>
            </tr>
        </table>
        <table style="width:100%; margin-top: 10px;">
            <tr>
                <th colspan="1" style="width: 19%">Mother's Name: </th>
                <td colspan="1" style="border-bottom: 1px solid black; width: 45%;">{{ $pds->mothers_name }}</td>
                <td colspan="1" style="width: 5%;"></td>
                <th colspan="1" style="width: 16%;">Mother's No.: </th>
                <td colspan="1" style="border-bottom: 1px solid black; width: 20%;">{{ $pds->mothers_number }}</td>
            </tr>
        </table>

        <h3 style="margin-bottom: 5px; margin-top: 30px;">Work Experience/s:</h3>
        <table class="table-work" style="width:100%;">
            <tr>
                <th class="th-work" colspan="1">Department / Agency / Office</th>
                <th class="th-work" colspan="1">Position</th>
                <th class="th-work" colspan="1">Inclusive Dates</th>
            </tr>
            <tr>
                <td class="td-work">{{ $pds->office }}</td>
                <td class="td-work">{{ $pds->position }}</td>
                <td class="td-work">{{ $pds->office_dates }}</td>
            </tr>
        </table>

        <h3 style="margin-bottom: 5px; margin-top: 10px;">Trainings / Seminars Attended:</h3>
        <table class="table-work" style="width:100%;">
            <tr>
                <th class="th-work" colspan="1">Title of Seminar / Conference / Workshop</th>
                <th class="th-work" colspan="1" style="width: 210px;">Inclusive Dates</th>
            </tr>
            <tr>
                <td class="td-work">{{ $pds->seminar_1 }}</td>
                <td class="td-work">{{ $pds->seminar_1_date }}</td>
            </tr>
            <tr>
                <td class="td-work">{{ $pds->seminar_2 }}</td>
                <td class="td-work">{{ $pds->seminar_2_date }}</td>
            </tr>
            <tr>
                <td class="td-work">{{ $pds->seminar_3 }}</td>
                <td class="td-work">{{ $pds->seminar_3_date }}</td>
            </tr>
        </table>

        <div class="confirmation" style="margin-top: 10px;">
            <p style="text-align: center;">I hereby certify that all information provided are true and correct to the best of my knowledge.</p>
            <table style="width:100%; margin-top: 30px;">
                <tr>
                    <td></td>
                    <td colspan="1" style="width: 40%; text-align: center; text-transform: uppercase;">
                        {{ $pds->signature }}
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

        <div class="confirmation" style="margin-top: 30px;">
            <h4><u><center>WAIVER</center></u></h4>
            <p >This is to signify that I am willing to be subjected to company calls for placement or employment purposes. This shall also authorize the Polytechnic University of The Philippines – Career Development and Placement Office (PUP-CDPO) to include my name and contact details in the directory of graduates.
            </p>
            <table style="width:100%; margin-top: 30px;">
                <tr>
                    <td colspan="1" style="width: 40%; text-align: center; text-transform: uppercase;">
                        {{ date('F d, Y', strtotime($pds->date_signed)) }}
                    </td>
                    <td></td>
                    <td colspan="1" style="width: 40%; text-align: center; text-transform: uppercase;">
                        {{ $pds->signature }}
                    </td>
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
        @endforeach
    </div>
</body>
</html>
