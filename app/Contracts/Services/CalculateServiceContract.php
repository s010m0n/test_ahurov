<?php

namespace App\Contracts\Services;

use App\Http\Requests\API\V1\Calculate\CalculateRequest;

interface CalculateServiceContract
{
    public function calculate(CalculateRequest $request);
}
