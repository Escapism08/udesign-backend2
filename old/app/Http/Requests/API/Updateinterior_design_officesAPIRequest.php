<?php

namespace App\Http\Requests\API;

use App\Models\interior_design_offices;
use InfyOm\Generator\Request\APIRequest;

class Updateinterior_design_officesAPIRequest extends APIRequest
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
        return interior_design_offices::$rules;
    }
}
