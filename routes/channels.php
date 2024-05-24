<?php

use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('chat', function (User $user) {
    return $user ? new UserResource($user) : null;
});

Broadcast::channel('message.user.{userId}-{userId2}', function (User $user, int $userId1, int $userId2) {
    return $user->id === $userId1 || $user->id === $userId2 ? $user : null;
});

Broadcast::channel('message.group.{groupId}', function (User $user, $groupId) {
    return $user->groups->contains('id', $groupId) ? $user : null;
});
