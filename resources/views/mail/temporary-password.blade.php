@component('mail::message')
    Username: {{ $stud_number }}<br>
    Email: {{ $email }}<br>
    Password: {{ $password }}

    <a href="{{ route('login') }}">Click this</a>

@component('mail::button', ['url' => route('login')])
    Button
@endcomponent

@endcomponent
