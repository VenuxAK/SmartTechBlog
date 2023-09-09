<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SignUpUserRequest extends FormRequest
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
            "fullName" => [
                "required", "string", "min:3", "max:255"
            ],
            "username" => [
                "required", "string", "min:3", "max:255", Rule::unique('users', 'username')
            ],
            "email" => [
                "required", "string", "email", "max:255", Rule::unique('users', 'email')
            ],
            "password" => [
                "required", "string", "min:6", "max:255",
            ],
        ];
    }
}
