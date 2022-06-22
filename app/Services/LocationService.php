<?php

namespace App\Services;

use App\Contracts\Repositories\LocationRepositoryContract;
use App\Contracts\Services\LocationServiceContract;
use App\Http\Resources\API\Location\LocationCollection;
use App\Http\Resources\API\Location\LocationResource;

class LocationService implements LocationServiceContract
{
    public function __construct(protected LocationRepositoryContract $locationRepository)
    {
    }


    /**
     * @return LocationCollection
     */
    public function getCollection(): LocationCollection
    {
        return new LocationCollection($this->locationRepository->getAll());
    }

    /**
     * @param $id
     * @return LocationResource
     */
    public function getResource($id): LocationResource
    {
        return new LocationResource($this->locationRepository->find($id));
    }
}
