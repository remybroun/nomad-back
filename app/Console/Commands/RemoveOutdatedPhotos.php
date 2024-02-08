<?php

namespace App\Console\Commands;

use Illuminate\Support\Facades\Http;
use Illuminate\Console\Command;
use App\Models\ListingImage;
use Illuminate\Support\Facades\Parallel;
use Illuminate\Support\Facades\Log;

class RemoveOutdatedPhotos extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'remove:photos';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Log::info('Starting image check');
        ob_flush();
        // Get a list of images to process
        $images = ListingImage::all();

        // Dispatch jobs concurrently
        foreach ($images as $image) {
            Log::info('Dispatching job for ' . $image->url);
            HttpImageCheckJob::dispatch($image)->onQueue('image-check');
        }

        return Command::SUCCESS;
    }
}
