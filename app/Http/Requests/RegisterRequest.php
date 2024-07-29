<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'لطفا نام خود را وارد کنید.',
            'name.string' => 'نام باید یک رشته باشد.',
            'name.max' => 'نام نباید بیش از ۲۵۵ کاراکتر باشد.',

            'email.required' => 'لطفا آدرس ایمیل خود را وارد کنید.',
            'email.string' => 'ایمیل باید یک رشته باشد.',
            'email.email' => 'ایمیل باید یک آدرس ایمیل معتبر باشد.',
            'email.max' => 'ایمیل نباید بیش از ۲۵۵ کاراکتر باشد.',
            'email.unique' => 'این آدرس ایمیل قبلا ثبت شده است.',

            'password.required' => 'لطفا یک رمز عبور وارد کنید.',
            'password.string' => 'رمز عبور باید یک رشته باشد.',
            'password.min' => 'رمز عبور باید حداقل ۸ کاراکتر باشد.',
        ];
    }
}
