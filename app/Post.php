<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{  
    protected $fillable = ["title", "description", "content","img","so_like","user_id" ,"category_id"];
    public function category()
    {
        return $this->belongsTo('App\Category');
        
    }
   
    public function user()
    {
        return $this->belongsTo('App\User');
    }
   public function comments()
   {
       return $this->hasMany('App\Comment');
   }
}
