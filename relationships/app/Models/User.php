<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Hash;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\MorphTo;

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

    // public function phone():HasOne
    // {
    //     // funcion de relacion 1 a muchos para la clase PHone.
    //     return $this->hasOne(Phone::class);
    // }
    // public function phones(): HasMany
    // {
    //     // funcion de relacion 1 a muchos para la clase PHone.
    //     return $this->hasMany(Phone::class);
    // }
    // public function Roles(): BelongsToMany
    // {
    //     // funcion de relacion 1 a muchos para la clase PHone.
    //     return $this->belongsToMany(Role::class)->withPivot('added_by');
    // }
    // public function phoneSim(): HasManyThrough
    // {
    //     return $this->hasManyThrough(Sim::class, Phone::class);
    // }

    // polimorfica uno a uno
    //     public function image(): MorphOne
    // {
    //     return $this->morphOne(Image::class, 'imageable');
    // }

    // polimorfica uno a muchos
        public function image(): MorphMany
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
