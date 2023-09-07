@component('mail::message')
<center>
    <p class="header">Polytechnic University of the Philippines Taguig Branch
        <span style="font-size: 25px; font-weight: bold;"><br>PUPT - Alumni Portal System</span>
    </p>
    <br>
</center>

Greetings <b>{{ $username }}</b>,

We received a request to reset the password for your account. To reset your password, kindly click on the button below to proceed to the reset password page. After reseting your password, please login to your account. If you did not initiate this request, please disregard this email.

@component('mail::button', ['url' => route('login.changePassword', $email)])
GO TO PASSWORD RESET PAGE
@endcomponent

Thank you,

<div style="display: flex;">
    <img src="{{ asset('img/pupLogo.png') }}" alt="" style="width: 13%; margin-right: 15px;">
    <img src="{{ asset('img/puptaps-logo.png') }}" alt="" style="width: 13%;">
</div>
@endcomponent


