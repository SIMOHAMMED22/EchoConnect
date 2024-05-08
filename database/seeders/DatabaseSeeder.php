<?php

namespace Database\Seeders;

use App\Models\Conversation;
use App\Models\Group;
use App\Models\Message;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'khayri Abu',
            'email' => 'khayri@example.com',
            'password' => bcrypt('password'),
            'is_admin' => true,
        ]);

        User::factory()->create([
            'name'=> 'Rim Adila',
            'email'=> 'Rim@example.com',
            'password'=> bcrypt('password'),
        ]);

        User::factory(10)->create();

        for ($i = 0; $i < 5; $i++) {
            $group = Group::factory()->create([
                'owner_id' => 1,
            ]);

            $users = User::inRandomOrder()->limit(rand(2,5))->pluck('id');
            $group->users()->attach(array_unique([1, ...$users]));
        }

        Message::factory(1000)->create();
        $message = Message::whereNull('group_id')->orderBy('created_at')->get();

        $conversations = $message->groupBy(function ($message) {
            return collect([$message->sender_id, $message->receiver_id])
            ->sort()->implode('-');
        })->map(function ($groupMessage) {
            return [
                'user_id1' => $groupMessage->first()->sender_id,
                'user_id2' => $groupMessage->first()->receiver_id,
                'last_message_id' => $groupMessage->last()->id,
                'created_at' => new Carbon(),
                'updated_at' => new Carbon(),
            ];
        })->values();

        Conversation::insertOrIgnore($conversations->toArray());
    }
}
