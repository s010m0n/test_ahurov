<?php

namespace App\Http\Resources\API\Booking;

use Illuminate\Http\Resources\Json\JsonResource;

class BookingResourceSmall extends JsonResource
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
            'location' => $this->room?->location?->name,
            'price' => $this->price,
            'days' => $this->days,
            'status' => $this->status
        ];
    }
}
