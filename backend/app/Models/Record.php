<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Record extends Model
{
	protected $guarded = false;

	public function client(): BelongsTo
	{
		return $this->belongsTo(Client::class);
	}

	public function slot(): BelongsTo
	{
		return $this->belongsTo(Slot::class);
	}

	public function failedRecord(): HasOne
	{
		return $this->hasOne(FailedRecord::class);
	}
}
