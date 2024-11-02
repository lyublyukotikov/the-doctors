<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

	public function doctors(): HasMany
	{
		return $this->hasMany(Doctor::class);
	}

	public function clients(): HasMany
	{
		return $this->hasMany(Client::class);
	}

	public function roles(): BelongsToMany
	{
		return $this->belongsToMany(Role::class);
	}

	public function getJWTIdentifier()
	{
		return $this->getKey();
	}

	public function getJWTCustomClaims(): array
	{
		return [];
	}

	public function getIsAdminAttribute():bool
	{
		return auth()->user()->roles->contains('role_idx', Role::ADMIN);
	}

	public function getIsDoctorAttribute():bool
	{
		return auth()->user()->roles->contains('role_idx', Role::DOCTOR);
	}

	public function getIsClientAttribute():bool
	{
		return auth()->user()->roles->contains('role_idx', Role::CLIENT);
	}

}
