<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignUpRequest extends FormRequest
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
            'name' => ['required', 'regex:/^(([a-zA-Z-]{1,30})|([а-яА-ЯЁёІіЇїҐґЄє-]{1,30}))$/u'],
            'phone' => ['required', 'regex:/^(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){10,14}(\s*)?$/']
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Поле обов\'язкове для заповнення',
            'name.regex' => 'Введіть дійсне ім\'я',
            'phone.required' => 'Поле обов\'язкове для заповнення',
            'phone.regex' => 'Введіть дійсний номер телефону',
        ];
    }
}
