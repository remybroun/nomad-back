<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CoworkingResource extends JsonResource
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
            "name" => $this->name,
            "main_image" => $this->main_image,
            "city" => $this->city,
            "country" => $this->country,
            "lng" => $this->lng,
            "lat" => $this->lat,
            "slug" => $this->slug,
            "url" => $this->url,
        ];
    }
}
