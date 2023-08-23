{{--
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
            font-family: "Avant Garde", Avantgarde, "Century Gothic", CenturyGothic, AppleGothic, sans-serif;
            color: #000000;
        }
        .header {
            font-size: 30px;
            font-weight: bold;
        }
        .header-logo {
            height: 80px;
            width: 80px;
        }
        .logo {
            display: flex;
            justify-content: center;
        }
    </style>
</head>
<body>
        <center>
            <div class="logo">
                <img src="{{ asset('img/pupLogo.png') }}" alt="" class="header-logo">
                <img src="{{ asset('img/puptaps-logo.png') }}" alt="" class="header-logo">
            </div>
            <p class="header">Polytechnic University of the Philippines Taguig Branch
                <span style="font-size: 25px; font-weight: bold;"><br>Alumni Portal System</span>
            </p>
        </center>

    <br>
    <p>Greetings {{ $stud_number }},</p>
    <br>
    <p>Welcome Alumni to our PUPT - Alumni Portal System. To proceed in your login, kindly click the button below to redirect you to the PUPT - Alumni Portal System Login page. After that please enter your email address and temporary password to login your account. If you did not initiate this request, please disregard this email.</p>
    <p>Temporary Password: <b>{{ $password }}</b></p>

    <br>
    <p>Padayon!</p>

    <br>
    <br>
    @component('mail::button', ['url' => route('login')])
        GO TO LOGIN PAGE
    @endcomponent

    <p style="font-size: 10px; text-align: center;">&#169;PUPT-Alumni Portal System
    </p>
</body>
</html>
--}}
@component('mail::message')
<center>
    <p class="header">Polytechnic University of the Philippines Taguig Branch
        <span style="font-size: 25px; font-weight: bold;"><br>PUPT - Alumni Portal System</span>
    </p>
    <br>
</center>

Greetings <b>{{ $stud_number }}</b>,

Welcome Alumni to our PUPT - Alumni Portal System. To proceed in your login, kindly click the button below to redirect you to the PUPT - Alumni Portal System Login page. After that please enter your email address and temporary password to login your account. If you did not initiate this request, please disregard this email.</p>

@component('mail::panel')
<p>Temporary Password: <b>{{ $password }}</b>
@endcomponent

Click <a href="{{ route('login') }}" style="font-weight: bold;">here</a> to redirect to login page.

Thank you,

<div style="display: flex;">
    <img src="{{ asset('img/pupLogo.png') }}" alt="" style="width: 13%; margin-right: 15px;">
    <img src="{{ asset('img/puptaps-logo.png') }}" alt="" style="width: 13%;">
</div>
@endcomponent
