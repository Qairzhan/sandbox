<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class Test extends Command
{
    protected $signature = 'start:test';
    protected $description = 'Chron test';


    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        dd("something1");
        Log::channel()->info('Test Complete');
    }

}
