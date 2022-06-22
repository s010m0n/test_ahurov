<?php

namespace App\Http\Requests\API\V1\Calculate;

use App\Models\Booking;
use App\Models\Order;
use Illuminate\Foundation\Http\FormRequest;

class CalculateRequest extends FormRequest
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
            'location_id' => ['required', 'integer', 'exists:locations,id'],
            'volume' => ['required', 'integer'],
            'temperature' => ['required', 'integer', 'min:'.Booking::MIN_TEMPERATURE],
            'days' => ['required', 'integer','min:'.Booking::MIN_PERIOD,'max:'.Booking::MAX_PERIOD]
        ];
    }
}
