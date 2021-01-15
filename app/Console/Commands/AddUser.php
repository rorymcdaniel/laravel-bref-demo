<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class AddUser extends Command
{

    protected $signature = 'add:user';


    protected $description = 'Adds a fake user to the database.';




    public function handle()
    {
        $user = User::factory()->create();
        $this->info("$user->name was created.");
    }
}
