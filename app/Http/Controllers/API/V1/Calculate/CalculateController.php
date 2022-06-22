<?php

namespace App\Http\Controllers\API\V1\Calculate;

use App\Contracts\Services\CalculateServiceContract;
use App\Http\Controllers\Controller;
use App\Http\Requests\API\V1\Calculate\CalculateRequest;


class CalculateController extends Controller
{
    public function __construct(private CalculateServiceContract $calculateService){

    }


    /**
     * @OA\Post(
     * path="/api/calculate",
     * summary="Calculate price",
     * description="Calculate price",
     * tags={"Calculate"},
     * @OA\RequestBody(
     *    required=true,
     *    description="Pass user credentials",
     *    @OA\JsonContent(
     *       required={"location_id","volume","days","temperature",},
     *       @OA\Property(property="location_id", type="integer", example=1),
     *       @OA\Property(property="volume", type="integer", example="3"),
     *       @OA\Property(property="days", type="integer", example="4"),
     *       @OA\Property(property="temperature", type="integer", example="3"),
     *    ),
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Ok",
     *    @OA\JsonContent(
     *       @OA\Property(property="data",
     *          @OA\Property(property="booking_details",
     *                @OA\Property(property="price", type="float", example="16"),
     *                @OA\Property(property="temperature", type="integer", example="3"),
     *                @OA\Property(property="vodume", type="integer", example="2"),
     *                @OA\Property(property="blocks", type="integer", example="3"),
     *                @OA\Property(property="days", type="integer", example="4"),
     *              ),
     *          @OA\Property(property="room",
     *                @OA\Property(property="id", type="float", example="16"),
     *                @OA\Property(property="lacation_id", type="integer", example="3"),
     *                @OA\Property(property="temperature", type="vodume", example="2"),
     *                @OA\Property(property="number_of_block", type="blocks", example="3"),
     *              ),
     *          )
     *        )
     *     )
     * )
     */


    public function calculate(CalculateRequest $request)
    {
        return $this->calculateService->calculate($request);
    }
}
