<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderStoreRequest extends FormRequest
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
            'full_name' => 'required|min:4',
            'address' => 'required|min:4|max:12',
            'zip_code' => 'required|min_digits:3|max_digits:10',
            'city' => 'required|min:3|max:10',
            'country' => 'required|min:3|max:20',
        ];
    }
}
