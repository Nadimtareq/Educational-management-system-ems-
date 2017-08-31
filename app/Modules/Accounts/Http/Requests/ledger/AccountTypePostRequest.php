<?php

namespace App\Modules\Accounts\Http\Requests\ledger;

use Illuminate\Foundation\Http\FormRequest;

class AccountTypePostRequest extends FormRequest
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
            'name'=> "Required|unique:account_types|max:255",
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Er, you forgot your Ledger name!',
            'name.unique' => 'Ledger already taken ! ',
        ];
    }
}
