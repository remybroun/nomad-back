<?php

namespace App\Models;

use App\Models\ListingImage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

//    protected $fillable = ['title', 'description', 'external_url', 'location', co];
    protected $guarded = [];

    public function listingImages()
    {
        return $this->hasMany(ListingImage::class);
    }

    public function mainListingImage()
    {
        return $this->hasOne(ListingImage::class)->orderByDesc('is_main');
    }
}
