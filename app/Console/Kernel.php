<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    // Тут указывается команда (которую мы прописали в app/Console/Commands/Test.php)
    // и запускается команда php artisan schedule:work (для запуска расписание)
    protected function schedule(Schedule $schedule)
    {
       $schedule->command('start:cronjob')->everyMinute();
    }


    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
