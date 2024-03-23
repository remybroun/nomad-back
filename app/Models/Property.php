<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = [
        'title', 'description', 'price', 'sqft', 'bedrooms',
        'bathrooms', 'beds', 'guests', 'minNights', 'location',
        'address', 'accessible_options', 'standingDesk',
        'ergonomicChair', 'externalMonitor', 'externalKeyboard',
        'externalMouse', 'officeChair', 'officeDesk', 'officeLamp',
    ];

    protected $casts = [
        'accessible_options' => 'array',
    ];
}
