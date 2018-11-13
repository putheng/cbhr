@component('mail::message')

# Password updated

Dear {{ auth()->user()->name }},

We're just letting you know that your password has changed.<br>
If you didn't request this password change please contact the customer support team.
<br>Or
<a href="{{ route('password.request') }}">reset password</a>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
