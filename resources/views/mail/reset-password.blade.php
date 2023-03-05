{{-- @component('mail::message')
    To reset you password click the button:

@component('mail::button', ['url' => route('login.changePassword', $email)])
    Go to reset password page.
@endcomponent

@endcomponent --}}


{{-- @component('mail::message')

Email Subject: PUPT-APS Reset Password<br><br><br>

Hi {{ $username }},<br>
We received a request to reset the password for your account. If you did not initiate this request, please disregard this email.

Click the button below to redirect you to the password reset page.

- PUPT-Alumni Portal System

@endcomponent --}}

{{-- @component('mail::layout')
    @slot('header')
        @component('mail::header', ['url' => route('landingPage')])
            <img src="{{asset('img/pupLogo.png')}}" alt="" srcset=""> PUPT - Alumni Portal System
        @endcomponent
    @endslot

    Email Subject: PUPT-APS Reset Password<br><br><br>

    Hi {{ $username }},<br>

    We received a request to reset the password for your account. If you did not initiate this request, please disregard this email.

    Click the button below to redirect you to the password reset page.

    - PUPT-Alumni Portal System

    @slot('subcopy')
        @component('mail::subcopy')
            @component('mail::button', ['url' => route('login.changePassword', $email)])
                Go to reset password page.
            @endcomponent
        @endcomponent
    @endslot


    @slot('footer')
        @component('mail::footer')
            PUP - APS
        @endcomponent
    @endslot
@endcomponent --}}

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
            margin: 0 5px;
            justify-content: center;
        }
        .logo {
            display: flex;
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
    <p>Greetings {{ $username }},</p>
    <br>
    <p>We received a request to reset the password for your account. To reset your password, kindly click on the button below to proceed to the reset password page. After reseting your password, please login to your account. If you did not initiate this request, please disregard this email.</p>

    <br>
    <p>Padayon!</p>

    <br>
    <br>
    @component('mail::button', ['url' => route('login.changePassword', $email)])
        GO TO PASSWORD RESET PAGE
    @endcomponent

    <p style="font-size: 10px; text-align: center;">&#169;PUPT-Alumni Portal System
    </p>
</body>
</html>
