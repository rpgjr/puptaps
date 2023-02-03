@component('mail::message')
    To reset you password click the button:

@component('mail::button', ['url' => route('login.changePassword', $email)])
    Go to reset password page.
@endcomponent

@endcomponent
