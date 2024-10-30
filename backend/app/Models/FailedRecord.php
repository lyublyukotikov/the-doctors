<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FailedRecord extends Model
{
	protected $guarded = false;

	public function record(): BelongsTo
	{
		return $this->belongsTo(Record::class);
	}
}
