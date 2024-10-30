<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Doctor extends Model
{
    protected $guarded = false;

	public function user(): BelongsTo
	{
		return $this->belongsTo(User::class);
	}

	public function slots(): HasMany
	{
		return $this->hasMany(Slot::class);
	}
}
