<?php

namespace App\Repositories;

use App\Contracts\Repositories\BookingRepositoryContract;
use App\Models\Booking;

class BookingRepository implements BookingRepositoryContract
{
    public function find($id)
    {
        return Booking::find($id);
    }

    public function getAll($device_token)
    {
        return Booking::where('device_token',$device_token)->get();
    }


    public function store($request, $code){

        return Booking::create([
            'device_token' => $request['device_token'],
            'room_id' => $request['room_id'],
            'number_of_blocks' => $request['number_of_blocks'],
            'volume' => $request['volume'],
            'temperature' => $request['temperature'],
            'days' => $request['days'],
            'price' => $request['price'],
            'secret_code' => $code,
            'status' => Booking::IN_PROGRESS,
        ]);
    }

}
