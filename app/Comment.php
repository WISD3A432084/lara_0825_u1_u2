<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;

class Comment extends Model
{
    //
    protected $table='comments';

    protected $fillable=['content_2','post_id'];
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
