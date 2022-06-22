<?php

namespace App\Http\Resources\API\Calculate;

use App\Http\Resources\API\Room\RoomResource;
use Illuminate\Http\Resources\Json\JsonResource;

class CalculateResource extends JsonResource
{
    private $price;

    public function __construct($param, $collection)
    {
        parent::__construct($collection);
        $this->collection = $collection;
        $this->param = $param;
    }

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'order_details' => $this->param,
            'room' => new RoomResource($this->collection),
        ];
    }
}
