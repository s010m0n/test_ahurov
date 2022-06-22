<?php

namespace App\Services;

use App\Contracts\Repositories\LocationRepositoryContract;
use App\Contracts\Services\CalculateServiceContract;
use App\Http\Requests\API\V1\Calculate\CalculateRequest;
use App\Http\Resources\API\Calculate\CalculateResource;
use App\Models\Booking;

class CalculateService implements CalculateServiceContract
{
    public function __construct(private LocationRepositoryContract $locationRepository){

    }

    /**
     * @param CalculateRequest $request
     * @return CalculateResource
     * @throws \Exception
     */
    public function calculate(CalculateRequest $request): CalculateResource
    {
        $temperature = $this->temperatureToArray($request->temperature);

        $location = $this->locationRepository->find($request->location_id);
        $rooms = $location->rooms->whereIn('temperature',$temperature);
        $rooms = $rooms->where('number_of_block','>', $request->volume/2);

        if ($rooms->count() != 0){
            $price = Booking::BLOCK_PRICE*ceil($request->volume/2)*$request->days;
        }else{
            abort(400, 'There are no suitable premises');
        }

        $param = [
            'price' => $price,
            'temperature' => $request->temperature,
            'volume' => $request->volume,
            'blocks' => ceil($request->volume/2),
            'days' => $request->days
        ];

        return new CalculateResource($param,$rooms->first());
    }

    /**
     * @param $temperature
     * @return array
     */
    public function temperatureToArray($temperature): array
    {
        return [$temperature-2, $temperature-1, intval($temperature), $temperature+1, $temperature+2];
    }

}
