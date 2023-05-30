<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class EntryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'email' => ['required', 'exists:admins,email'],
            'password' => ['required',
                function ($attribute, $value, $fail) {
                    if (md5($value) !== '21232f297a57a5a743894a0e4a801fc3') {
                        $fail('Введіть вірний пароль');
                    }
                },
            ],
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Поле обов\'язкове для заповнення',
            'email.exists' => 'Введіть вірний email',
            'password.required' => 'Поле обов\'язкове для заповнення',
        ];
    }
}
