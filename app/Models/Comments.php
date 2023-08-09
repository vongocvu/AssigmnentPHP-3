<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;

    protected $fillable = [
        'author',
        'content',
        'like',
        'dislike',
        'comment_parent',
        'level',
        'post',
    ];
}
