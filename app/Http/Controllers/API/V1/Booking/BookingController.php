<?php

namespace App\Http\Controllers\API\V1\Booking;

use App\Contracts\Services\BookingServiceContract;
use App\Http\Controllers\Controller;
use App\Http\Requests\API\V1\Booking\IndexBookingRequest;
use App\Http\Requests\API\V1\Booking\ShowBookingRequest;
use App\Http\Requests\API\V1\Booking\StoreBookingRequest;


class BookingController extends Controller
{

    public function __construct(private BookingServiceContract $bookingService)
    {
    }

    /**
     * @OA\Get(
     *     path="/api/booking_list",
     *     summary="Get booking list",
     *     description="Get booking list",
     *     tags={"Booking"},
     *     @OA\Parameter(
     *         description="Device token",
     *         in="query",
     *         name="device_token",
     *         required=true,
     *         @OA\Schema(type="string"),
     *         @OA\Examples(example="string", value="d9sd8s9ds89d8s9dsdsx9d", summary="An string value."),
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="OK",
     *     @OA\JsonContent(
     *       @OA\Property(property="data",

     *                @OA\Property(property="id", type="integer", example="1"),
     *                @OA\Property(property="location", type="string", example="Уилмингтон (Северная Каролина)"),
     *                @OA\Property(property="price", type="float", example="43"),
     *                @OA\Property(property="days", type="integer", example="4"),
     *                @OA\Property(property="status", type="string", example="in_progress"),

     *          ),
     *          )
     *     )
     * )
     */

    public function index(IndexBookingRequest $request)
    {
        return $this->bookingService->index($request->device_token);
    }

    /**
     * @OA\Get(
     *     path="/api/booking_show",
     *     summary="Show booking",
     *     description="Show booking",
     *     tags={"Booking"},
     *     @OA\Parameter(
     *         description="Booking ID",
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
     *          @OA\Property(property="booking_details",
     *                @OA\Property(property="id", type="integer", example="1"),
     *                @OA\Property(property="device_token", type="string", example="d9sd8s9ds89d8s9dsdsx9d"),
     *                @OA\Property(property="room_id", type="integer", example=1),
     *                @OA\Property(property="number_of_blocks", type="integer", example="3"),
     *                @OA\Property(property="vodume", type="integer", example="2"),
     *                @OA\Property(property="temperature", type="integer", example="3"),
     *                @OA\Property(property="days", type="integer", example="4"),
     *                @OA\Property(property="price", type="float", example="4"),
     *                @OA\Property(property="secret_code", type="string", example="hwfB8G8gzYdh"),
     *                @OA\Property(property="status", type="string", example="in_progress"),
     *                @OA\Property(property="created_at", type="date", example="2022-06-22T08:44:34.000000Z"),
     *                @OA\Property(property="updated_at", type="date", example="2022-06-22T08:44:34.000000Z"),

     *              ),
     *          )
     *          )
     *     )
     * )
     */


    public function show(ShowBookingRequest $request)
    {
        return $this->bookingService->show($request->id);
    }


    /**
     * @OA\Post(
     *     path="/api/booking_blocks",
     * summary="Book blocks",
     * description="Book blocks",
     * tags={"Booking"},
     * @OA\RequestBody(
     *    required=true,
     *    description="Pass user credentials",
     *    @OA\JsonContent(
     *       required={"room_id","volume","days","temperature","device_token","number_of_blocks","price"},
     *       @OA\Property(property="room_id", type="integer", example=1),
     *       @OA\Property(property="volume", type="integer", example="3"),
     *       @OA\Property(property="days", type="integer", example="4"),
     *       @OA\Property(property="temperature", type="4", example="3"),
     *       @OA\Property(property="device_token", type="string", example="d9sd8s9ds89d8s9dsdsx9d"),
     *       @OA\Property(property="number_of_blocks", type="integer", example="3"),
     *       @OA\Property(property="price", type="float", example="4"),
     *    ),
     * ),
     * @OA\Response(
     *    response=201,
     *    description="Created",
     *    @OA\JsonContent(
     *     @OA\Property(property="status", type="string", example="Booking_successful"),
     *       @OA\Property(property="data",
     *          @OA\Property(property="booking_details",
     *                @OA\Property(property="device_token", type="string", example="d9sd8s9ds89d8s9dsdsx9d"),
     *                @OA\Property(property="room_id", type="integer", example=1),
     *                @OA\Property(property="number_of_blocks", type="integer", example="3"),
     *                @OA\Property(property="vodume", type="integer", example="2"),
     *                @OA\Property(property="temperature", type="integer", example="3"),
     *                @OA\Property(property="days", type="integer", example="4"),
     *                @OA\Property(property="blocks", type="integer", example="3"),
     *                @OA\Property(property="price", type="float", example="4"),
     *                @OA\Property(property="secret_code", type="string", example="hwfB8G8gzYdh"),
     *                @OA\Property(property="status", type="string", example="in_progress"),
     *              ),
     *
     *          )
     *        )
     *     )
     * )
     */


    public function store(StoreBookingRequest $request)
    {
        return $this->bookingService->create($request);
    }
}
