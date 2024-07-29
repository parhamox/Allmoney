<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [

            'email' => ['required','string','email','exists:users,email'],
            'password' => ['required','string','min:8']
        ];
    }

        public function messages()
        {
            return [
                'email.required' => 'ایمیل خود را  درست وارد کنید !',
                'email.email' => 'لطفا یک ایمیل تایید شده وارد کنید.',
                'email.exists' => 'ایمیل شما در سیستم وجود ندارد',

                'password.required' => 'پسورد خود را  وارد کنید ',
                'password.min' => 'پسورد باید حداقل  8 تایی باشد'
            ];
        }
}
