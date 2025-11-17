<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Dom\Comment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    // php will only allow us
    // to fill out the below fields
    // so if we try to fill out other columns
    // php will not allow us to do so
    // It helps us prevent an inject threat.
    protected $fillable = [
        'full_name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
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

    // One-to-one relationship (user-profile):
    public function profile() {
        return $this->hasOne(Profile::class);
    }
    // One-to-many relationship (user-article):
    public function articles() {
        return $this->hasMany(Article::class);
    }

    // Many-to-many relationship (user-comment):
    public function comments() {
        return $this->hasMany(Comment::class);
    }

}
