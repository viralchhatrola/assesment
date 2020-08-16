@component('mail::message')
# Welcome to Assesment

Your credentials are as below

Email: {{$email ?? ''}}

Password: {{$password ?? ''}}

@component('mail::button', ['url' => config("app.url")."/login"])
Login
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
