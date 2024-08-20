<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorecvRequest extends FormRequest
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
            'name' => 'required|string|max:50',
            'surname' => 'required|string|max:50',
            'age' => 'required|integer|min:18|max:99',
            'phone' => 'required|string',
            'email' => 'required|string|max:50|unique:cvs,email',
            'education'=> 'required|string',
            'experience'=> 'required|string',
            'skills'=> 'required|string',
            'language1'=> 'required|string|max:15',
            'language2'=> 'required|string',
            'language3'=> 'required|string'
        ];
    }
}
