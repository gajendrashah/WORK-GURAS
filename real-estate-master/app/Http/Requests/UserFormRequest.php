<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserFormRequest extends FormRequest
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
            'full_name' => 'required|min:3',
            'email' => 'required|unique:users',
            'password' => 'required|min:3|confirmed',
            'password_confirmation' => 'required|min:3',
            'address_1' => 'required',
            'mobile' => 'required|numeric',
            'terms' => 'required',
        ];
    }
}
