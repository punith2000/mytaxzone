<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeamHeader extends Model
{
    protected $table = 'teams_headers';

    protected $fillable = ['title', 'content'];
}