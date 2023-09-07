@component('mail::message')
<center>
    <p class="header">Polytechnic University of the Philippines Taguig Branch
        <span style="font-size: 25px; font-weight: bold;"><br>PUPT - Alumni Portal System</span>
    </p>
    <br>
</center>

Greetings <b>{{ $username }}</b>,

We are sorry to announce that your post has been rejected by the faculty/administrators of PUPT - Alumni Portal System. It is due to:

@component('mail::panel')
{{ $reason }}</b>
@endcomponent

We hope that you understand our decision. Moving on, if you wanted to create a post in our Career page you can do so and we also recommend that you check our guidelines before posting.

Thank you,

<div style="display: flex;">
    <img src="{{ asset('img/pupLogo.png') }}" alt="" style="width: 13%; margin-right: 15px;">
    <img src="{{ asset('img/puptaps-logo.png') }}" alt="" style="width: 13%;">
</div>
@endcomponent
