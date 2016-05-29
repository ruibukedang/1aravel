<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function node()
    {
        return $this->belongsTo('App\Node');
    }
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
