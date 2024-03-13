<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocationView extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public $timestamps = false;

    protected $dates = ['viewed_at'];

    /**
     * Get the user that owns the view.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the location that was viewed.
     */
    public function location()
    {
        return $this->belongsTo(Location::class);
    }
}
