<?php

namespace App\Models;

use App\Traits\MetronicPaginate;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Carbon\Carbon;

class User extends Authenticatable
{
    use HasFactory, Notifiable, MetronicPaginate;

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

    ];
    protected $appends = ['img_url' , 'created_at_date'];

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

    public function getImgUrlAttribute()
    {
        return getImageUrl(self::MEDIA_PATH , $this->img);
    }
    public function getCreatedAtDateAttribute()
    {
        return Carbon::parse($this->created_at)->format('Y-m-d');
    }
}
