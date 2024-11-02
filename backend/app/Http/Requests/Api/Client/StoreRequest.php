<?php

namespace App\Http\Requests\Api\Client;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
			'email' => 'nullable|string',
			'phone' => 'nullable|string',
			'birthday' => 'nullable|date',
			'user_id' => 'required|integer|exists:users,id',
		];
    }
}
