<?php

namespace App\Http\Resources;

use App\Models\ListingImage;
use App\Http\Resources\LocationResource;
use Illuminate\Http\Resources\Json\JsonResource;

class ListingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'location' => new LocationResource($this->location_slug),
            'is_featured' => $this->is_featured,
            'longitude' => $this->longitude,
            'latitude' => $this->latitude,
            'amenities' => $this->amenities,
            'arrangements' => $this->arrangements,
            'main_image' => new ListingImageResource($this->mainListingImage),
            'external_url' => $this->external_url,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'close_coworkings' => $this->close_coworkings,
            'close_weworks' => $this->close_weworks,
            'latest_price' => $this->latest_price,
        ];
    }
}
