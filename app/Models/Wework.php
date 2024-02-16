<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wework extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $fillable = ['score'];
    public $timestamps = false;


    public function images()
    {
        return $this->hasMany(WeworkImage::class);
    }

    public function location_slug()
    {
        return $this->belongsTo(Location::class, 'location_id', 'id', 'locations');
    }


}
