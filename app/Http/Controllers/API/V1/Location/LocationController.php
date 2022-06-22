<?php

namespace App\Http\Controllers\API\V1\Location;

use App\Contracts\Services\LocationServiceContract;
use App\Http\Controllers\Controller;
use App\Http\Requests\API\V1\Location\ShowLocationRequest;




class LocationController extends Controller
{

    public function __construct(private LocationServiceContract $locationService){

    }

    /**
     * @OA\Get(
     *     path="/api/location_list",
     *     summary="Get locations list",
     *     description="Get locations list",
     *     tags={"Location"},
     *     @OA\Response(
     *         response=200,
     *         description="OK",
     *     @OA\JsonContent(
     *       @OA\Property(property="data",
     *                @OA\Property(property="id", type="integer", example="1"),
     *                @OA\Property(property="name", type="string", example="Уилмингтон (Северная Каролина)"),
     *          ),
     *       )
     *     )
     * )
     */

    public function index()
    {
        return $this->locationService->getCollection();
    }

    /**
     * @OA\Get(
     *     path="/api/location_show",
     *     summary="Show location",
     *     description="Show location",
     *     tags={"Location"},
     *     @OA\Parameter(
     *         description="Location ID",
     *         in="query",
     *         name="id",
     *         required=true,
     *         @OA\Schema(type="integer"),
     *         @OA\Examples(example="int", value="1", summary="An int value."),
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="OK",
     *     @OA\JsonContent(
     *     @OA\Property(property="status", type="string", example="Booking_successful"),
     *       @OA\Property(property="data",
     *                @OA\Property(property="id", type="integer", example="1"),
     *                @OA\Property(property="name", type="string", example="Уилмингтон (Северная Каролина)"),
     *                @OA\Property(property="rooms",
     *                  @OA\Property(property="id", type="integer", example="1"),
     *                  @OA\Property(property="location_id", type="integer", example=1),
     *                  @OA\Property(property="temperature", type="integer", example=1),
     *                  @OA\Property(property="number_of_blocks", type="integer", example="3"),
     *              ),
     *          )
     *          )
     *     )
     * )
     */

    public function show(ShowLocationRequest $request){
        return $this->locationService->getResource($request->id);
    }
}
