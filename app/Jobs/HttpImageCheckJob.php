<?php
// app/Jobs/HttpImageCheckJob.php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;
use App\Models\ListingImage;
use Illuminate\Support\Facades\Log;

class HttpImageCheckJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $image;

    public function __construct(ListingImage $image)
    {
        $this->image = $image;
    }

    public function handle()
    {
        Log::info('Checking ' . $this->image->url);
        $response = Http::timeout(300)->get($this->image->url);

        if ($response->status() != 200) {
            Log::info('Deleting ' . $this->image->url);
            $this->image->delete();
        }
    }
}
