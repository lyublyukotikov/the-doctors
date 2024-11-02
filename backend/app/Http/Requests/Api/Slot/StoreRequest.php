<?php

namespace App\Http\Requests\Api\Slot;

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
			'time_start' => 'nullable|date_format:Y-m-d H:i:s',
			'time_end' => 'nullable|date_format:Y-m-d H:i:s',
			'doctor_hospitals_id' => 'required|integer|exists:doctor_hospitals,id',
		];
    }
}
