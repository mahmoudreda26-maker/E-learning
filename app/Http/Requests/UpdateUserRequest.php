<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
     {
        return [
            "name" => "nullable|string|min:3|max:255",
            "email" => "nullable|email",
            "password" => "nullable|min:6|confirmed",
            'role' => 'nullable|in:admin,instructor,student',
            'phone' => 'nullable|min:11|max:15',
        ];
    }
}




