<?php

namespace App\Http\Requests\Api\FailedRecord;

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
			'failed_at' => 'required|date:Y-m-d',
			'record_id' => 'required|integer',
		];
    }
}
