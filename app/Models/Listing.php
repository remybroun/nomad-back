<?php

namespace App\Models;

use App\Models\ListingImage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'external_url', 'location'];
    public function listingImages()
    {
        return $this->hasMany(ListingImage::class);
    }

    public function main_listing_image()
    {
        return ListingImage::where('listing_id', $this->id)->first()->url ?? Null;
    }
}
