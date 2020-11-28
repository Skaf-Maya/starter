<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OfferRequest extends FormRequest
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
        return  [
            'name' => 'required|max:100|unique:offers,name',
            'price' => 'required|numeric',
            'details' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => __('messages.name required'),
            'name.max' => __('messages.name max'),
            'name.unique' => __('messages.name unique'),
            'price.required' => __('messages.price required'),
            'price.numeric' => __('messages.price numeric'),
            'details.required' => __('messages.details required')
        ];
    }
}
