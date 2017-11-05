<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $table='comments';

    protected $fillable=['title', 'content_2', 'is_feature'];
}
