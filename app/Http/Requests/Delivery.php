<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Delivery extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; //true: no authorized required false: authorized requiered
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
		return [
          'name' => 'required|max:30',
		  'hoursMax' => 'required|numeric',
		  'price' => 'required|numeric'
        ];
    }
}
