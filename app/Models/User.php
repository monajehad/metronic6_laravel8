<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    const MEDIA_PATH = "users/";
    protected $fillable = [
        'name' ,
        'email' ,
        'password' ,
        'permission_type_id' ,
        'mobile' ,
        'mobile_verified_at' ,
        'email_verified_at' ,
        'banned_at' ,
        "allow_push_notifications" ,
        "allow_use_wallet" ,
        "wallet" ,
        "rating" ,

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
