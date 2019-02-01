<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Product extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
		return [
          'name' => 'required|max:100',
          'description' => 'required',
		  'shortDescription' => 'required|max:50',
		  'basePrice' => 'required|numeric',
		  'typeSupplement' => 'max:50',
		  'volume' => 'numeric',
		  'shifts' => 'integer',
		  'wheelsAmount' => 'integer',
		  'weight' => 'numeric',
		  'subCategoryId' => 'required|integer',
		  'brandId' => 'required|integer',
		  'sportId' => 'required|integer'
        ];
    }
}
