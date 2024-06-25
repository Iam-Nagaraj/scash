<?php

namespace App\Console;

use App\Jobs\ProcessNegativeBalance;
use App\Jobs\ProcessReferralAmount;
use App\Jobs\PromotionalNotification;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        $schedule->job(new ProcessNegativeBalance)->hourly();
        $schedule->job(new PromotionalNotification)->hourly();
        $schedule->job(new ProcessReferralAmount)->hourly();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
