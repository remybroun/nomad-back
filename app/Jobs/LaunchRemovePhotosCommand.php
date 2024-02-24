<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Artisan;

class LaunchRemovePhotosCommand implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // Execute the remove:photos command
        $exitCode = Artisan::call('remove:photos');

        // Optional: Log the result or take action based on the exit code
        if ($exitCode === 0) {
            \Log::info('Remove photos command executed successfully.');
        } else {
            \Log::error('Remove photos command failed with exit code: ' . $exitCode);
        }
    }
}
