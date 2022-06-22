<?php

namespace App\Repositories;

use App\Contracts\Repositories\LocationRepositoryContract;
use App\Models\Location;

class LocationRepository implements LocationRepositoryContract
{
    public function getAll()
    {
        return Location::all();
    }

    public function find($id)
    {
        return Location::find($id);
    }

}
