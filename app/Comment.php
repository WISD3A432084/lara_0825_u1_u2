<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;

class Comment extends Model
{
    //
    protected $table='comments';

    protected $fillable=['title', 'content_2', 'is_feature'];
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
