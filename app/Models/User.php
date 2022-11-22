<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use SoftDeletes;

    public static $rules = [
        'register' =>
        [
            'name' => ['required', 'min:2', 'max:50', 'not_regex:/([^A-Za-zÀ-ÿ\s]+)/'],
            'first_surname' => ['required', 'min:2', 'max:50', 'not_regex:/([^A-Za-zÀ-ÿ\s]+)/'],
            'second_surname' => ['nullable', 'min:2', 'max:50', 'not_regex:/([^A-Za-zÀ-ÿ\s]+)/'],
            'photo' => ['nullable', 'url'],
            'phone' => ['required', 'min:6', 'max:20'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'regex:/(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s)(?=^.{6,}$).*$/'],
        ],
        'login' =>
        [
            'email' => ['required', 'email'],
            'password' => ['required'],
            'device_name' => ['required'],
        ],
        'change-password' =>
        [
            'old_password' => ['required'],
            'password' => ['required', 'confirmed']
        ]
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'first_surname',
        'second_surname',
        'photo',
        'phone',
        'email',
        'password',
        'role_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
