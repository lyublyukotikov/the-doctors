<?php

namespace App\Http\Requests\Api\Record;

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
			'slot_id' => 'required|integer',
			'client_id' => 'required|integer',
			'is_visited' => 'nullable|integer',
		];
    }
}
