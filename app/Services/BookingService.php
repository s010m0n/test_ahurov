<?php

namespace App\Services;

use App\Contracts\Repositories\BookingRepositoryContract;
use App\Contracts\Services\BookingServiceContract;
use App\Http\Requests\API\V1\Booking\StoreBookingRequest;
use App\Http\Resources\API\Booking\BookingCollection;
use App\Http\Resources\API\Booking\BookingResource;
use App\Http\Resources\API\Booking\BookingResourceSuccessful;
use Illuminate\Support\Str;

class BookingService implements BookingServiceContract
{
    public function __construct(private BookingRepositoryContract $bookingRepository)
    {
    }

    /**
     * @param $device_token
     * @return BookingCollection
     */
    public function index($device_token): BookingCollection
    {
        return new BookingCollection($this->bookingRepository->getAll($device_token));
    }

    /**
     * @param $id
     * @return BookingResource
     */
    public function show($id): BookingResource
    {
        return new BookingResource($this->bookingRepository->find($id));
    }

    /**
     * @param StoreBookingRequest $request
     * @return BookingResourceSuccessful
     */
    public function create(StoreBookingRequest $request): BookingResourceSuccessful
    {
        return new BookingResourceSuccessful($this->bookingRepository->store($request->validated(),$this->codeGenerate()));
    }

    /**
     * @return string
     */
    public function codeGenerate(): string
    {
        return Str::random(12);
    }

}
