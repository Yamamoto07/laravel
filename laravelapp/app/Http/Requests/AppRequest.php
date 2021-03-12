<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AppRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
	if ($this->path() == 'food' || 'food/add')
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
            'quantity' => 'numeric|between:0,10000',
	    'unit' => 'required',
	    'limit' => 'date'
        ];
    }

    public function messages()
    {
	return [
	    'name.required' => '名前を入力してください。',
	    'quantity.numeric' => '数量を整数で入力してください。',
	    'unit.required' => '単位を入力してください。',
	    'limit.date' => '日付を入力してください。(例:2021/3/5)'
	];
    }
}
