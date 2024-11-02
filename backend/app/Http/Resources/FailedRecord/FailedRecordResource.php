<?php

namespace App\Http\Resources\FailedRecord;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FailedRecordResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
			'id' => $this->id,
			'failed_at' => $this->failed_at
		];
    }
}
