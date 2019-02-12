<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{

    use SoftDeletes;


    public function getImageAttribute($image){
        return asset($image);
    }

    protected $dates = ['deleted_at'];

    protected $fillable =[
        'title', 'content', 'image', 'category_id', 'slug'
    ];

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function tags(){
        return $this->belongsToMany('App\Tag');
    }

}
