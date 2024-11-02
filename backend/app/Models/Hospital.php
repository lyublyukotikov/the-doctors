<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Hospital extends Model
{
	protected $guarded = false;

	public function doctorHospitals(): HasMany
	{
		return $this->hasMany(DoctorHospital::class);
	}
}
