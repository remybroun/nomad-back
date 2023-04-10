<?php

namespace App\Console\Commands;
use App\Models\Listing;
use Illuminate\Support\Facades\Http;

use Illuminate\Console\Command;

class getLatestPrices extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pull:prices';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command getLatestPrices';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $listings = Listing::whereNull('price_per_night')->get();

        foreach ($listings as $listing) {
            echo $listing->external_url;
            $url = "http://localhost:8084/pricing?url=".$listing->external_url;
            $response = Http::timeout(100)->get($url);
            
            // dd($response->json()->data);
            $response = json_decode($response);
            $listing->update(['price_per_night' => $response?->data?->price_per_night]);

        }
        return Command::SUCCESS;
    }
}
