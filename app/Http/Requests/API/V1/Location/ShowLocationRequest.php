<?php

namespace App\Http\Requests\API\V1\Location;

use App\Models\Location;
use Illuminate\Foundation\Http\FormRequest;

class ShowLocationRequest extends FormRequest
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
            'id' => ['integer','required','exists:locations'],
        ];
    }
}
