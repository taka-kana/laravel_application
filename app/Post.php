<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Post extends Model
{
    // ---ここから追記----
    protected $fillable = ['title', 'body'];

    // Userモデルとのリレーション
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    // ---追記ここまで---
}
