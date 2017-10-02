<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $guard = 'admin';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'NAME', 'EMAIL', 'PASSWORD', 'JOB_TITLE'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'PASSWORD', 'remember_token',
    ];

    public function users(){
      return $this->hasMany('App\User');
    }

    public function curtners(){
      return $this->hasMany('App\Curtner');
    }

    public function drivers(){
      return $this->hasMany('App\Driver');
    }

    public function coordinates(){
      return $this->hasMany('App\Coordinate');
    }

    public function statusorders(){
      return $this->hasMany('App\StatusOrder');
    }
}
