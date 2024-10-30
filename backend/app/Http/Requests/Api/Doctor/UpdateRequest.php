<?php

namespace App\Http\Requests\Api\Doctor;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
			'name' => 'nullable|string',
			'surname' => 'nullable|string',
			'patronymic' => 'nullable|string',
			'phone' => 'nullable|string',
			'email' => 'nullable|string',
			'experience' => 'nullable|integer',
			'direction' => 'nullable|string',
        ];
    }
}
