<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Slot extends Model
{
	protected $guarded = false;

	public function doctor(): BelongsTo
	{
		return $this->belongsTo(Doctor::class);
	}

	public function records(): HasMany
	{
		return $this->hasMany(Record::class);
	}
}
