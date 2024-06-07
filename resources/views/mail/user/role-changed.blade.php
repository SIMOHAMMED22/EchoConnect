<x-mail::message>
Hello {{ $user->name }},<br>
@if ($user->is_admin)
You are now admin in the system. You can add and block users.
@else
Your role was changed into regular user. You are no longer able to add or block users.
@endif
<br>
Thank you, <br>
{{ config('app.name') }}
</x-mail::message>

@if ($user->blocked_at)
Your account has been activated. You can now normally use the system.
@else
@endif