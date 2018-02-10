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

    public function serviceimages(){
        return $this->hasMany('App\Serviceimage');
    }

    public function scopeSearch($query, $title){
          if (trim($title) != "") {
            $query->where('title',"LIKE", "%$title%");
          }
    }

    public static function findBySlugOrFail($slug, $columns = array('*') )
    {
        if ( ! is_null($slug = static::whereSlug($slug)->first($columns))) {
            return $slug;
        }

        throw new ModelNotFoundException;
    }
}
