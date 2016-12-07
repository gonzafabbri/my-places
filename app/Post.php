<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = ['contenido'];

    public function user() {
        return $this->belongsTo('App\User', 'user_id');
    }
}
