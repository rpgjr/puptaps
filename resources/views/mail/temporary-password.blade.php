@component('mail::message')
    Hello {{ $stud_number }}<br>
    Email: {{ $email }}<br>
    Password: {{ $password }}

@component('mail::button', ['url' => 'https://getbootstrap.com/docs/5.3/utilities/colors/#colors'])
    Button
@endcomponent

@endcomponent

