<?php

namespace App\Console\Commands;
use App\Models\Listing;
use App\Models\ListingPrice;
use Illuminate\Support\Facades\Http;
use Illuminate\Console\Command;
use Carbon\Carbon;
class GetLatestPrices extends Command
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
        $listings = Listing::all();

        foreach ($listings as $listing) {
            $this->line($listing->external_url);

            $existing_price = ListingPrice::where('listing_id', $listing->id)->where('created_at', '>', Carbon::now()->subDay())->first();
            // dd($existing_price);
            if($existing_price){
                $this->line("Price already fetched today". "Price : ". $existing_price);
                continue;
            }
            
            $url = "https://bnb-scraper.onrender.com/pricing?url=".$listing->external_url;

            try {
                $response = Http::timeout(100)->get($url);
                
                // dd($response->json()->data);
                $response = json_decode($response);

                $listing_price = ListingPrice::create([
                   'listing_id' => $listing->id,
                   'price_per_night' => $response?->data?->price_per_night
                ]);

            } catch (\Exception $e) {
                $this->line($e->getMessage());
            }

            // $listing->update(['price_per_night' => $response?->data?->price_per_night]);
        }
        return Command::SUCCESS;
    }
}
