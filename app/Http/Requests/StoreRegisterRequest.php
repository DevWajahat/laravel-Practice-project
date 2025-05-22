<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRegisterRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:2|max:20',
            'email' => 'required|email',
            'password' => 'required|min:8|max:16',
            'phone_no' => 'required|min:4|max:20'
        ];
    }

    public function sanitized(): array
    {
        return [
            'name' => $this->name,
            'role' => $this->role,
            'email' => $this->email,
            'password' => $this->password,
            'phone_no' => $this->phone_no
        ];
    }
}

