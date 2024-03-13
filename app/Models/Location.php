<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Location extends Model
{
    use HasFactory;

    protected $guarded = [''];
    protected $hidden = ['created_at', 'updated_at'];

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id', 'id', 'countries');
    }

    public function listings()
    {
        return $this->hasMany(Listing::class);
    }

// In Location.php
    public function views()
    {
        return $this->hasMany(LocationView::class);
    }


    /**
     * Increment the view count for the location.
     */
    public function incrementViews()
    {
        $this->views += 1; // Increment the views property directly.
        $this->save(); // Save the model with the updated views count.
    }

        public function recordView()
    {
        $this->views()->create([
            'user_id' => Auth::id() ?? null,
            'viewed_at' => now(), // Ensure your LocationView model has a 'viewed_at' column if you're using this
        ]);

        // Optional: if you want to keep a cached count of views on the Location model without querying every time,
        // you can still manually increment a 'views_count' attribute here, then periodically recalculate it from the LocationViews table.
        $this->incrementViews();
    }

}
