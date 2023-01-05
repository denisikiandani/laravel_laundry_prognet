<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserServiceRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'category'=>[
                'string'
            ],
            'product'=>[
                'required',
                'string'
            ],
            'price'=>[
                'required',
                'integer'
            ],
            'image'=>'mimes:jpg,jpeg,png|image|max:2048'
        ];
    }
}
