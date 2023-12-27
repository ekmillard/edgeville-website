<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsPost extends Model
{
    protected $fillable = ['title', 'content', 'image', 'published_at'];

    protected $casts = [
        'published_at' => 'date'
    ];

}
