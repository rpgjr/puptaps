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
                <img src="{{ asset('img/pupapsLogo.png') }}" alt="" class="header-logo">
            </div>
            <p class="header">PUPT - Alumni Portal System</p>
        </center>

    <br>
    <p>Hi {{ $username }},</p>
    <br>
    <p>We received a request to reset the password for your account. If you did not initiate this request, please disregard this email.</p>

    @component('mail::button', ['url' => route('login.changePassword', $email)])
        GO TO PASSWORD RESET
    @endcomponent

    <p style="font-size: 10px; text-align: center;">&#169;PUPT-Alumni Portal System
    </p>
</body>
</html>
