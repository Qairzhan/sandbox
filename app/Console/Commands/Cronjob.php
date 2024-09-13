<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class Cronjob extends Command
{
    protected $signature = 'start:cronjob';
    protected $description = 'Cron test';


    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        Log::channel()->info('Cron job is working');
    }

}
