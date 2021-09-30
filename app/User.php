<?php

namespace App;


use App\Models\Course;
use Laravel\Cashier\Billable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    
    use Notifiable, Billable, HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','avatar', 'provider_id', 'provider','access_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function articles()
    {
        return $this->hasMany('App\Models\Article', 'author_id');
    }
    
    public function courses()
    {
        return $this->hasMany('App\Models\Course', 'author_id');
    }
    
    /**
     * verifyUser
     *
     * @return void
     */
    public function verifyUser()
    {
        return $this->hasOne('App\VerifyUser');
    }
}
