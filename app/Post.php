<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title','description','date','time'];

    public function qtdViews()
    {
        return $this->hasOne(PostViews::class,'id_post');
    }
}
