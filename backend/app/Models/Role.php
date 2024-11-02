<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends Model
{
	protected $guarded = false;

	const ADMIN = 1;
	const DOCTOR = 2;
	const CLIENT = 3;

	public static function getRoles(): array
	{
		return [
			self::ADMIN => 'admin',
			self::DOCTOR => 'doctor',
			self::CLIENT => 'client',
		];
	}

	public function users(): BelongsToMany
	{
		return $this->belongsToMany(User::class);
	}
}
