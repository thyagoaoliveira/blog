<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
    	'titulo',
    	'conteudo',
    	'postado'
    ];

    public function comentario()
    {
    	return $this->hasMany('App\Comentario');
    }

    public function tag()
    {
    	return $this->belongsToMany('App\Tag', 'posts_tags');
    }
}
