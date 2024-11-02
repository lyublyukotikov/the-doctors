<?php

namespace App\Http\Resources\Slot;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SlotResource extends JsonResource
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
			'time_start' => $this->time_start,
			'time_end' => $this->time_end,
		];
    }
}
