<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
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

    /**
     * Define the relationship between User and Home model.
     */
    public function homes()
    {
        return $this->hasMany(Home::class);
    }

    /**
     * Define the relationship between User and Furniture model.
     */
    public function furnitures()
    {
        return $this->hasMany(Furniture::class);
    }

    /**
     * Define the relationship between User and Commentaire model.
     */
    public function commentaires()
    {
        return $this->hasMany(Commentaire::class);
    }

    /**
     * Define the relationship between User and About model.
     */
    public function about()
    {
        return $this->hasOne(About::class);
    }

    /**
     * Define the relationship between User and Blog model.
     */
    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }
}
