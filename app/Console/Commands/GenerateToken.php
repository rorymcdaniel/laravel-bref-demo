<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Tymon\JWTAuth\Facades\JWTAuth;

class GenerateToken extends Command
{

    protected $signature = 'generate:token';

    protected $description = 'Generates a random user and returns the token.';

    public function handle()
    {
       $user = User::factory()->create();
       $token = JWTAuth::fromUser($user);
       dump($token);
    }
}
