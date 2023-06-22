<?php

namespace App\Console\Commands;
use App\Models\UnverifiedListings;
use Illuminate\Support\Facades\Http;
use App\Models\Listing;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\ListingImageController;
use Illuminate\Console\Command;

class GetLatestPrices extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pull:unverified_listings';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add all unverified listings';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $unverified_listings = UnverifiedListings::all();


        foreach ($unverified_listings as $listing) {
            $this->line($listing->airbnb_id);

            $listing_obj = Listing::where('external_url', 'LIKE', '%'.$listing->airbnb_id.'%')->first();


            if ($listing_obj){
                $this->line("This listing already exists : ".$listing_obj['id']);
                $listing->delete();
                continue;
            }

            $url = "https://extract-airbnb-listings.onrender.com/airbnb?url=https://www.airbnb.com/rooms/".$listing->airbnb_id;

            try {
                $response = Http::timeout(300)->get($url);

                $json = $response->json();
                if (!$json['data']){
                    $this->line("No response from Airbnb");
                    $listing->delete();
                    continue;
                }

                // Arrangements

                $arrangements = $json['data']['arrangementDetails'];
                $arrangement_list = [];
                if ($arrangements){
                    foreach ($arrangements as $arrangement) {
                        $title = $arrangement['title'];
                        $subtitle = "";
                        if ($arrangement['subtitle']){
                            $subtitle = $arrangement['subtitle'];
                        }
                        array_push($arrangement_list, [
                            'title' => $title,
                            'subtitle' => $subtitle
                        ]);
                    }
                }
                else{
                    $arrangements = []; 
                }

                // Amenities

                $amenity_categories = $json['data']['amenities'];
                $amenity_list = [];
                foreach ($amenity_categories as $amenity_category) {
                    $amenity_category_title = $amenity_category['title'];
                    $amenities = $amenity_category['amenities'];

                    foreach ($amenities as $amenity){
                        array_push($amenity_list, $amenity['title']);
                    }
                }

                // Images

                $image_urls = [];

                foreach ($json['data']['images'] as $room) {
                    foreach ($room['images'] as $img) {
                        array_push($image_urls, $img);
                    }
                }

                $location = $json['data']['location']['subtitle'] ?? $json['data']['location']['previewLocationDetails'][0]['title'] ?? $json['data']['location']['seeAllLocationDetails'][0]['title'];

                $listing_obj = [
                    'title' => $json['data']['seoTags']['ogDescription'],
                    'description' => $json['data']['full_description'],
                    'location' => $location,
                    'latitude' => $json['data']['latitude'],
                    'longitude' => $json['data']['longitude'],
                    'amenities' => $amenity_list ?? [],
                    'arrangements' => $arrangement_list ?? [],
                    'price_per_night' => $json['data']['price_per_night'],
                    'external_url' => 'https://www.airbnb.com/rooms/'.$listing->airbnb_id
                ];

                $listing = ListingController::storeFromObject($listing_obj);
                ListingImageController::storeMultipleImageObjects($image_urls, $listing['id']);

            } catch (\Exception $e) {
                $this->line($e->getMessage());
            }
        }
        return Command::SUCCESS;
    }
}
