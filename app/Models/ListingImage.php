<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Listing;

class ListingImage extends Model
{
    use HasFactory;

    protected $fillable = ['url', 'listing_id'];

    public function listings()
    {
        return $this->belongsTo(Listing::class);
    }

}
