<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'type'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function articles(){
        return $this->hasMany('App\Article');
    }

    public function services(){
      return $this->hasMany('App\Service');
    }

    public function scopeSearch($query, $name){
          if (trim($name) != "") {
            $query->where('name',"LIKE", "%$name%");
          }
    }

    public function administrador()
    {
      return $this->type === 'Administrador';
    }


}
