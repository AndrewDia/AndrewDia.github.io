<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:2|max:50',
            'email' => 'required|email',
            'message' => 'required|min:15'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => "Введіть коректне ім'я",
            'email.required' => 'Введіть e-mail',
            'message.required' => "Поле повідомлення є обов'язковим",
            'message.min' => 'Повідомлення повинне бути не менше 15 символів'
        ];
    }
}
