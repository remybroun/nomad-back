<?php

namespace App\Models;

use App\Models\ListingImage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;


    protected $guarded = [];
    protected $casts = ['amenities' => 'array'];
    public function listingImages()
    {
        return $this->hasMany(ListingImage::class);
    }

    public function mainListingImage()
    {
        return $this->hasOne(ListingImage::class)->orderByDesc('is_main');
    }
}
