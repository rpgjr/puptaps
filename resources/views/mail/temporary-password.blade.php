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
