<?php

namespace App\Models;

use App\Models\ListingImage;
use App\Models\ListingPrice;
use App\Models\Location;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $casts = [
        'amenities' => 'array',
        'arrangements' => 'array',
    ];

    public function listingImages()
    {
        return $this->hasMany(ListingImage::class);
    }

    public function latest_price()
    {
        return $this->hasOne(ListingPrice::class)->orderByDesc('created_at');
    }

    public function listing_prices()
    {
        return $this->hasMany(ListingPrice::class);
    }

    public function location_slug()
    {
        return $this->belongsTo(Location::class, 'location_id', 'id', 'locations');
    }

    public function close_coworkings()
    {
        return $this->belongsToMany(Coworking::class, 'coworking_listing_proximities', 'listing_id', 'coworking_id');
    }

    public function close_weworks()
    {
        return $this->belongsToMany(Wework::class, 'wework_listing_proximities', 'listing_id', 'wework_id');
    }

    public function mainListingImage()
    {
        return $this->hasOne(ListingImage::class)->orderByDesc('is_main');
    }


    public function logView(Request $request)
    {
        $property_view = PropertyView::create([
            'session_id' => $request->session()->getId(),
            'user_id' => auth()->check() ? auth()->id() : null,
            'property_id' => $this->id,
            'ip_address' => request()->ip(),
            'timestamp' => now()
        ]);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'users_property', 'property_id', 'user_id');
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    public function views()
    {
        return $this->hasMany(PropertyView::class);
    }
    public function allImages()
    {
        return $this->hasMany(PropertyImage::class);
    }

//    public function livingSpaceImages()
//    {
//        return $this->hasMany(PropertyImage::class)->where('is_livingspace', true);
//    }
//
//    public function workspaceImages()
//    {
//        return $this->hasMany(PropertyImage::class)->where('is_workspace', true);
//    }
//
//    public function featuredImages()
//    {
//        return $this->hasMany(PropertyImage::class)->where('is_featured', '!=', 0);
//    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

//    public function associatedBlogArticles()
//    {
//        return $this->belongsToMany(BlogArticle::class, 'properties_blog_articles', 'property_id', 'blog_article_id');
//    }

//    public function getRouteKeyName(): string
//    {
//        return 'slug';
//    }

    public function nextAvailability()
    {

        $reservations = $this->reservations()
            ->where('check_out', '>=', Carbon::now())
            ->where('status', '!=', "pending")
            ->orderBy('check_in', 'ASC')
            ->get();
        // dd($reservations);

        if (count($reservations) == 0) {
            return Carbon::now();
        }

        for ($i = 0; $i <= count($reservations) - 1; $i++) {

            $fromDate = Carbon::parse($reservations[$i]['check_out']);

            if ($i == count($reservations) - 1) {
                $toDate = $fromDate->addDays(32);
            } else {
                $toDate = Carbon::parse($reservations[$i + 1]['check_in']);
            }

            $dayDiff = $fromDate->diffInDays($toDate);
            if ($dayDiff >= 31) {
                return $fromDate;
            }
        }

        return Carbon::parse($reservations[count($reservations) - 1]['check_out']);
    }
}
