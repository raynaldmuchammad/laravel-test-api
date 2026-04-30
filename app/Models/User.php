<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Override;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'active',
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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    protected $appends = [
        'order_count',
        'can_edit',
    ];

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class, "user_id", "id");
    }

    public function getOrderCountAttribute($value)
    {
        return $this->orders()->count();
    }

    public function getCanEditAttribute($value)
    {
        if ($this->role == 'administrator') {
            return true;
        } else if ($this->role == 'manager') {
            return false;
        } else if ($this->role == 'user') {
            return true;
        }

        return false;
    }
}
