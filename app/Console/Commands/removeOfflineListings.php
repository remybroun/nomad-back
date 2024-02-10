<?php

namespace App\Console\Commands;

use App\Models\Listing;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class removeOfflineListings extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'remove:offline-listings';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Removing offline listings');
        // Get a list of Listings to process
        $listings = Listing::where('is_archived', false)->get();

        $this->info('Found ' . $listings->count() . ' listings to check');
        foreach ($listings as $listing) {
            // Call listing URL; if it is not 200, then delete the listing
            $this->info('Checking ' . $listing->external_url. ' for ' . $listing->id);
            $response = Http::timeout(300)->get($listing->external_url);
            if ($response->status() != 200) {
                // mark as archived
                $this->info('Listing offline ' . $listing->id);
                $listing->is_archived = true;
            }
//            if page has title "404" or "Page not found" or "Not found" or "Page not available
            dd(strpos($response->body(), "Error code:"),$response->body());
//            if (strpos($response->body(), '404') !== false || strpos($response->body(), 'Page not found') !== false || strpos($response->body(), 'Not found') !== false || strpos($response->body(), 'Page not available') !== false) {
//                $this->info('Listing offline ' . $listing->id);
//                $listing->is_archived = true;
//            }
//            $listing->save();

        }

        $this->info('Listing check completed.');
    }
}
