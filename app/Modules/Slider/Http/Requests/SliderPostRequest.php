<?php

namespace App\Modules\Slider\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderPostRequest extends FormRequest
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
            'name'=> 'required',
            'img_url' => 'required|image|mimes:jpeg,png,jpg|max:2058',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'A title is required',
            'img_url.required'  => 'Image is required',
        ];
    }
}
