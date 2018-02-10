<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serviceimage extends Model
{
    protected $table = "serviceimages";

    protected $fillable = ['name', 'service_id'];

    public function service(){
      return $this->belongsTo('App\Service');
    }

}
