<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Jetstream\HasTeams;
use Laravel\Sanctum\HasApiTokens;
use Symfony\Component\HttpKernel\Profiler\Profile;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use HasTeams;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];
   //relacion de uno a uno
    public function profile(){
        //$profile= Profile::Where('user_id',$this->id)->first();

        return $this->hasOne('App\Models\Profile');
    }

    //relacion de uno a muchos

    public function post(){
        return $this->hasMany('App\Models\Post');
    }

    public function videos()
    {
        return $this->hasMany('App\Models\Video');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }

    //relacion de muchos  a muchos

    public function roles(){
        return $this->belongsToMany('App\Models\Role');
    }

    //relacion uno a uno polimorfica

    public function image(){
        return $this->morphOne('App\Models\Image','imageable');
    }
}
