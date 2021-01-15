<?php

namespace App\Console\Commands;

use App\Jobs\CreateUserJob;
use Illuminate\Console\Command;

class DispatchJobs extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dispatch:jobs';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Dispatches test jobs to the queue';



    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        for($i = 0; $i<10000; $i++){
            CreateUserJob::dispatch();
        }
        $this->info("jobs dispatched.");
    }
}
