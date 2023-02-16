{{-- @component('mail::message')
    Hi Alumni!



@endcomponent

@component('mail::message')
This is your temporary credentials for login.

Username: {{ $stud_number }}
Password: {{ $password }}


@endcomponent

@component('mail::message')
Please click the button below to redirect you to the PUPT-APS Log-in then enter your username and temporary password.

Thanks,
PUPT-APS
@endcomponent


@component('mail::button', ['url' => route('login')])
    Go to Login
@endcomponent --}}

@component('mail::layout')
    @slot('header')
        @component('mail::header', ['url' => route('landingPage')])
            PUPT - Alumni Portal System
        @endcomponent
    @endslot

Hi Alumni!

<br>

This is your temporary credentials for login.

Username: {{ $stud_number }}

Password: {{ $password }}

<br>

Please click the button below to redirect you to the PUPT-APS Log-in then enter your username and temporary password.

<br>

Thanks,

PUPT-APS

    @slot('subcopy')
        @component('mail::subcopy')
            @component('mail::button', ['url' => route('login')])
                Go to Login
            @endcomponent
        @endcomponent
    @endslot


    @slot('footer')
        @component('mail::footer')
            PUP - APS
        @endcomponent
    @endslot
@endcomponent

