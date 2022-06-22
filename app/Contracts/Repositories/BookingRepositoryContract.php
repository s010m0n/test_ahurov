<?php

namespace App\Contracts\Repositories;

interface BookingRepositoryContract
{
    public function getAll($device_token);

    public function find($id);

    public function store($request, $code);

}
