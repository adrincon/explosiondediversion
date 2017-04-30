<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Service extends Model
{

    use Sluggable;

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
      }

    protected $table = "services";

    protected $fillable=['title', 'content', 'user_id'];

    public function user(){
      return $this->belongsTo('App\User');
    }
}
