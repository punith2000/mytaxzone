<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CaseStudyHeader extends Model
{
    protected $table = 'case_study_headers';

    protected $fillable = ['title', 'content'];
}