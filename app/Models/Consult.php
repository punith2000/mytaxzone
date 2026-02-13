<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consult extends Model
{
    protected $table = 'consultations'; // if table is consult not consults
    protected $fillable = ['name', 'email', 'phone', 'service'];
}