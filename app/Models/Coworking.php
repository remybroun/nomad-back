<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coworking extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function location_slug()
    {
        return $this->belongsTo(Location::class, 'location_id', 'id', 'locations');
    }

    function coworkingImages(){

    }
}
