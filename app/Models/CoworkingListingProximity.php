<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoworkingListingProximity extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = [];

    public function coworkings()
    {
        return $this->belongsTo(Coworking::class, 'coworking_id', 'id', 'coworkings');
        // return $this->belongsTo(Wework::class);
    }

    public function listings()
    {
        return $this->belongsTo(Listing::class, 'listing_id', 'id', 'listings');
    }

}
