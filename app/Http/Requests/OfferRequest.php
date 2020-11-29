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
            'name_ar' => 'required|max:100|unique:offers,name_ar',
            'name_en' => 'required|max:100|unique:offers,name_en',
            'details_ar' => 'required',
            'details_en' => 'required',
            'price' => 'required|numeric',


        ];
    }

    public function messages()
    {
        return [
//            'name_ar.required' => __('messages.Offer name required'),
//            'name_en.required' => __('messages.name required'),

            'name_ar.required' => __('messages.offer name required'),
            'name_en.required' => __('messages.offer name required'),

            'name_ar.max' => __('messages.name_ar max'),
            'name_en.max' => __('messages.name_en max'),

            'name_ar.unique' => 'اسم العرض موجود ',
            'name_en.unique' => 'Offer name  is exists ',

//            'name_ar.unique' => __('messages.name unique'),
//            'name_en.unique' => __('messages.name unique'),


            'details_ar.required' => 'ألتفاصيل مطلوبة ',
            'details_en.required' => 'ألتفاصيل مطلوبة ',

//            'details_ar.required' => __('messages.details required'),
//            'details_en.required' => __('messages.details required'),

            'price.required' => __('messages.price required'),
            'price.numeric' => __('messages.price numeric'),
        ];
    }
}
