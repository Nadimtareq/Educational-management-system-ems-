<?php

namespace App\Modules\User\Http\Requests\Superadmin;

use Illuminate\Foundation\Http\FormRequest;

class teacherPostRequest extends FormRequest
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
            'email'=> 'required',
            'contact'=>'required',
            'name'=>'required',
            'religion'=>'required',
            'designation'=>'required',
            'speacial'=>'required'
        ];
    }
}
