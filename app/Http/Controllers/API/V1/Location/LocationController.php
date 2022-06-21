<?php

namespace App\Http\Controllers\API\V1\Location;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * @OA\Get(
 *     path="/location_list",
 *     summary="Updates a user",
 *     @OA\Parameter(
 *         description="Parameter with mutliple examples",
 *         in="path",
 *         name="id",
 *         required=true,
 *         @OA\Schema(type="string"),
 *         @OA\Examples(example="int", value="1", summary="An int value."),
 *         @OA\Examples(example="uuid", value="0006faf6-7a61-426c-9034-579f2cfcfa83", summary="An UUID value."),
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="OK"
 *     )
 * )
 */

class LocationController extends Controller
{
    public function index(){
        return 1;
    }
}
