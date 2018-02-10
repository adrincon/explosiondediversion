<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Article extends Model
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

    protected $table = "articles";

    protected $fillable = ['title', 'content', 'category_id', 'user_id'];

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function images(){
        return $this->hasMany('App\Image');
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
