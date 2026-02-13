<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Carbon\Carbon;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'content',
        'image',
        'author_name',
        'author_image',
        // 'published_at',
    ];
}