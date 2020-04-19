<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileFormRequest extends FormRequest
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

        return [
            'full_name' => 'required',
            'address_1' => 'required',
            'mobile' => 'required|numeric|min:9',

        ];
    }

    public function messages()
    {
        return [
            'full_name.required' => "Full Name is required."
        ];
    }
}
