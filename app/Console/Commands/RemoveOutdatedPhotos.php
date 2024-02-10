<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\ListingImage;
use Illuminate\Support\Facades\Http;

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
    protected $description = 'Remove outdated photos';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('Starting image check');

        // Get a list of images to process
        $images = ListingImage::where('id', '>', 23100)->get();
        $this->info('Found ' . $images->count() . ' images to check');
        foreach ($images as $image) {
            // Call image URL; if it is not 200, then delete the image
            $this->info('Checking ' . $image->url. ' for ' . $image->id);
            $response = Http::timeout(300)->get($image->url);
            if ($response->status() != 200) {
                $this->info('Deleting ' . $image->id);
                $image->delete();
            }
        }

        $this->info('Image check completed.');

        return Command::SUCCESS;
    }
}
