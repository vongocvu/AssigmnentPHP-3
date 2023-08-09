<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;

    protected $fillable = [
        'author',
        'title',
        'post_slug',
        'post_image',
        'short_content',
        'content',
        'category',
        'tags',
        'view',
        'status',
    ];
}
