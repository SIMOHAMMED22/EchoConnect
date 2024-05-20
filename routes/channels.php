<?php

use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('chat', function ($user) {
    return $user ? new UserResource($user) : null;
});
