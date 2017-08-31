<?php

namespace App\Modules\Studentbatch\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditBatchPostRequest extends FormRequest
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

            'session_id' =>'Required',
            'student_class' =>'Required',
            'Roll' =>'Required'
        ];
    }
}
