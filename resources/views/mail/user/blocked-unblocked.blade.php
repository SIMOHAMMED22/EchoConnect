<x-mail::message>
Hello {{ $user->name }},<br>
Your account has been activated. You can now normally use the system.

<x-mail::button url="{{ route('login') }}">
Click here to login
</x-mail::button>

Thank you, <br>
{{ config('app.name') }}
</x-mail::message>