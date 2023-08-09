<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorys extends Model
{
    use HasFactory;

    protected $fillable = [
        'cate_name',
        'cate_slug',
        'cate_image',
        'cate_parent',
    ];
}
