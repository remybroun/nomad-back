<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ListingImage;

class Listing extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'external_url'];

    public function listingImages()
    {
        return $this->hasMany(ListingImage::class);
    }
}
