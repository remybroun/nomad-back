<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Listing;

class ListingPrice extends Model
{
    use HasFactory;
    protected $guarded = [''];
    protected $hidden = ['updated_at'];

    public function listing()
    {
        return $this->belongsTo(Listing::class);
    }
}
