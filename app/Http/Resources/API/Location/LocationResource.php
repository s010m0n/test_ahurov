<?php

namespace App\Http\Resources\API\Location;

use App\Http\Resources\API\Room\RoomResource;
use Illuminate\Http\Resources\Json\JsonResource;

class LocationResource extends JsonResource
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
            'name' => $this->name,
            'rooms' => $this->whenLoaded('rooms', RoomResource::collection($this->rooms)),
        ];
    }
}
