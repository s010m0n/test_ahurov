<?php

namespace App\Http\Requests\API\V1\Booking;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'device_token' => ['required', 'string'],
            'room_id' => ['required','integer'],
            'number_of_blocks' => ['required', 'integer'],
            'volume' => ['required', 'integer'],
            'temperature' => ['required', 'integer'],
            'days' => ['required', 'integer'],
            'price' => ['required', 'numeric'],
        ];
    }
}
