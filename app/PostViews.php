<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostViews extends Model
{
    protected $table = 'views_post';
    protected $fillable = ['qtde','id_post'];
    public $timestamps = false;

    public function post()
    {
        return $this->belongsTo(\App\Post::class,'id_post');
    }
}
