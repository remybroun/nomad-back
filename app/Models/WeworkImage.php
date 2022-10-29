<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeworkImage extends Model
{
    use HasFactory;

    protected $guarded = [''];

    public function weworks()
    {
        return $this->belongsTo(Wework::class);
    }

}
