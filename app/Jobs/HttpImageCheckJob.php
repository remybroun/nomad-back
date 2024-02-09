<?php
use Illuminate\Support\Facades\Http;
use App\Models\ListingImage;
use Illuminate\Support\Facades\Log;
use Illuminate\Contracts\Queue\ShouldQueue; // Import the ShouldQueue interface

class HttpImageCheckJob implements ShouldQueue // Implement the ShouldQueue interface
{

    protected $imageId;

    public function __construct($imageId)
    {
        $this->imageId = $imageId;
    }

    public function handle()
    {
        // Use lockForUpdate to obtain a lock on the database record
        $image = ListingImage::where('id', $this->imageId)->lockForUpdate()->first();

        if ($image) {
            Log::info('Checking ' . $image->id);
            $response = Http::timeout(300)->get($image->url);

            if ($response->status() != 200) {
                Log::info('Deleting ' . $image->id);
                $image->delete();
            }
        } else {
            Log::info('Image not found, skipping...');
        }
    }
}
