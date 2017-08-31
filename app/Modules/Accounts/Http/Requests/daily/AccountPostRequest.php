<?php

namespace App\Modules\Accounts\Http\Requests\daily;

use Illuminate\Foundation\Http\FormRequest;

class AccountPostRequest extends FormRequest
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

            'newdate'=> "Required",
            'ledger'=> "Required",
            'amount'=> "Required",

        ];
    }

    public function messages()
    {
        return [


        ];
    }
}
