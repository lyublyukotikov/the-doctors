<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Client extends Model
{
	protected $guarded = false;

	public function user(): BelongsTo
	{
		return $this->belongsTo(User::class);
	}

	public function records(): HasMany
	{
		return $this->hasMany(Record::class);
	}
}
