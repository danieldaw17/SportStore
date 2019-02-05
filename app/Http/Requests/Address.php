<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Address extends FormRequest
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
 		  'line' => 'required|integer',
 		  'roadType' => 'required',
		  'roadName' => 'required|max:70',
 		  'city' => 'required|max:40',
 		  'province' => 'required|max:40',
 		  'zipCode' => 'required',
		  'country' => 'required|max:25',
		  'typeAddress' => 'required',
		  'userId' => 'required'
 		];
 	}
 }
