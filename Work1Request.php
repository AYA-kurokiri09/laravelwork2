<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Work1Request extends FormRequest
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
            'name' => 'required',
            'mail' => 'required',
            'password_confirmation' => 'min:7',
            'password' => 'confirmed',
        ];
    }

    public function messages()
    {
        return [
            'password_confirmation.min' => 'Passwordは7文字以上で入力下さい。',
            'password.confirmed' => 'PasswordとConfirm Passwordが一致しません。',
        ];
    }
}
