<?php

namespace App\Http\Requests\API;

use App\Models\vendor_guy;
use InfyOm\Generator\Request\APIRequest;

class Createvendor_guyAPIRequest extends APIRequest
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
        return vendor_guy::$rules;
    }
}
