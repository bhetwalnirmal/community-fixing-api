<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'post_category_id',
        'title',
        'description',
        'location',
        'price',
        'created_at',
        'updated_at',
    ];
}
