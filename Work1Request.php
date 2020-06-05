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
            'password' => 'min:7',
            'confirmPassword' => 'required|same:password',
        ];
    }

    public function messages()
    {
        return [
            'password.min' => 'Passwordは7文字以上で入力して下さい。',
            'confirmPassword.required' => 'PasswordとConfirm Passwordが一致しません。',
            'confirmPassword.same' => 'PasswordとConfirm Passwordが一致しません。',
        ];
    }
}
