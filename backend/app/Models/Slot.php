<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Slot extends Model
{
	protected $guarded = false;

	public function records(): HasMany
	{
		return $this->hasMany(Record::class);
	}

	public function doctorHospital(): BelongsTo
	{
		return $this->belongsTo(DoctorHospital::class);
	}
}
