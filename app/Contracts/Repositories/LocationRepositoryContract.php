<?php

namespace App\Contracts\Repositories;

interface LocationRepositoryContract
{
    public function getAll();

    public function find($id);

}
