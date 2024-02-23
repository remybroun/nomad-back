<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeworkListingProximity extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = [];

    protected $table = 'wework_listing_proximity';

    public function weworks()
    {
        return $this->belongsTo(Wework::class, 'wework_id', 'id', 'weworks');
        // return $this->belongsTo(Wework::class);
    }

    public function listings()
    {
        return $this->belongsTo(Listing::class, 'listing_id', 'id', 'listings');
    }

}
