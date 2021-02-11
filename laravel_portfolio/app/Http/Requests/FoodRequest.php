<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FoodRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
	if ($this->path() == 'food/add' || 'food/edit')
        {
	    return true;
	} else {
            return false;
	}
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
	    'quantity' => 'numeric|between:0,9999',
	    'unit' => 'required'
        ];
    }

    public function messages()
    {
	return [
	    'name.required' => '名前を入力してください。',
	    'quantity.between' => '0~9999の間の整数を入力してください。',
	    'quantity.numeric' => '0~9999の間の整数を入力してください。',
	    'unit.required' => '単位を入力してください。'
	];
    }

}

