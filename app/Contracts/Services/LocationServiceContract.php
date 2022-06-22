<?php

namespace App\Contracts\Services;

interface LocationServiceContract
{
    /**
     * @return mixed
     */
    public function getCollection(): mixed;

    public function getResource($id): mixed;
}
