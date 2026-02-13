<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class About extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'content', 
        'image1', 
        'image2',
        'count1', 
        'label1',
        'count2', 
        'label2',
        'count3', 
        'label3',
    ];
}