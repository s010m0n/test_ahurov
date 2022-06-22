<?php

namespace App\Http\Resources\API\Booking;

use Illuminate\Http\Resources\Json\JsonResource;

class BookingResourceSuccessful extends JsonResource
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
            'status' => 'Booking_successful',
            'data' => $this->resource
        ];
    }
}
