<?php

namespace App\Contracts\Services;

use App\Http\Requests\API\V1\Booking\StoreBookingRequest;

interface BookingServiceContract
{
    public function index($device_token);

    public function show($id);

    public function create(StoreBookingRequest $request);
}
