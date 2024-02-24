<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\ListingImage;
use Illuminate\Support\Facades\Http;

class RemoveOutdatedPhotosJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $images;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($images)
    {
        $this->images = $images;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        foreach ($this->images as $image) {
            // Assume $image is a lightweight DTO or an array with necessary data
            $response = Http::timeout(300)->get($image['url']);
            if ($response->status() != 200) {
                // Find and delete the actual image model to avoid issues with serialization
                ListingImage::find($image['id'])->delete();
            }
        }
    }
}
