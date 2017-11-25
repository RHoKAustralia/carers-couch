<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use PhpJunior\LaravelVideoChat\Models\Conversation\Conversation;
use PhpJunior\LaravelVideoChat\Models\Group\Conversation\GroupConversation;

class ChatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $conversation = new Conversation();
        $conversation->first_user_id = 1;
        $conversation->second_user_id = 2;
        $conversation->save();

        $conversation->messages()->create([
            'user_id'   => 1,
            'text'      => 'Hello'
        ]);

        $conversation2 = new Conversation();
        $conversation2->first_user_id = 1;
        $conversation2->second_user_id = 3;
        $conversation2->save();

        $conversation2->messages()->create([
            'user_id'   => 1,
            'text'      => 'Hello, I need a help !!!'
        ]);

        $group = new GroupConversation();
        $group->name = 'Test';
        $group->save();

        $group->users()->attach([ 1,2,3 ]);
    }
}
