<?php

namespace App\Models;

use App\Models\ListingImage;
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

    public function location_slug()
    {
        return $this->belongsTo(Location::class, 'location_id', 'id', 'locations');
    }

    public function mainListingImage()
    {
        return $this->hasOne(ListingImage::class)->orderByDesc('is_main');
    }
}
