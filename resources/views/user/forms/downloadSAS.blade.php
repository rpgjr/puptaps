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

        .table-work, .th-work, .td-work {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }

        .user {
            font-size: 18px;
            margin-top: 20px;
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

        <h4>Part 1.  RESPONDENT’S PERSONAL INFORMATION</h4>
        @foreach ($users as $user)
        <table style="width:100%; margin-top: 10px;">
            <tr>
                <th colspan="1" style="width: 19%">Degree/Course: </th>
                <td colspan="1" style="border-bottom: 1px solid black; width: 50%;">{{ $user->courseID }}</td>
                <td colspan="1" style="width: 5%;"></td>
                <th colspan="1" style="width: 21%;">Year Graduated: </th>
                <td colspan="1" style="border-bottom: 1px solid black; width: 10%;">{{ $user->batch }}</td>
            </tr>
        </table>
        @endforeach
    </div>

</body>
</html>
