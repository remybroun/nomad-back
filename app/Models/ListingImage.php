<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Listing;

class ListingImage extends Model
{
    use HasFactory;

    protected $guarded = [''];

    public function listings()
    {
        return $this->belongsTo(Listing::class);
    }

}
