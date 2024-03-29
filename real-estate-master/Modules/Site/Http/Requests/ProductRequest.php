<?php

namespace Modules\Site\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'title' => 'required',
            'property_type' => 'required',
            'city' => 'required',
            'state' => 'required',
            'name_of_project_society' => 'required',
            'locality' => 'required',
            'price' => 'required',
            'main_image' => 'required',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
