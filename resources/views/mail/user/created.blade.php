<x-mail::message>
Hello {{ $user->name }},<br>
Your account has been created successfully.<br>
**Here is your login details:** <br>
Email: {{ $user->email }} <br>
Password: {{ $password }} <br>

Please login to the system and change your password.

<x-mail::button url="{{route('login')}}">
Click here to login
</x-mail::button>

Thanks, <br>
{{ config('app.name') }}
</x-mail::message>