<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CaseStudies extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'role',
        'image'
    ];
}