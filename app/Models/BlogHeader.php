<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogHeader extends Model
{
    protected $table = 'blogs_headers';

    protected $fillable = ['title', 'content'];
}