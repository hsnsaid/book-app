<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WriterRequest extends FormRequest
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
            'name' => 'required|string|min:8|max:255|unique:writers',
            'email' => 'required|string|email|max:255|unique:writers',
            'password' => 'required|string|min:8',
            'phone' => 'required|digits:10|unique:writers'
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge(
            [
                'name' => trim($this->name),
                'email' => trim($this->email),
                'phone' => trim($this->phone)
            ]
        );
    }
}
