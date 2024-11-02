<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DoctorHospital extends Model
{
	protected $guarded = false;

	public function doctor(): BelongsTo
	{
		return $this->belongsTo(Doctor::class);
	}

	public function hospital(): BelongsTo
	{
		return $this->belongsTo(Hospital::class);
	}

	public function slots(): HasMany
	{
		return $this->hasMany(Slot::class);
	}
}
