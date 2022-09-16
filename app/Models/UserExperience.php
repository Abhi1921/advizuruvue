<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserExperience extends Model
{
    use HasFactory;
    protected $fillable = [
        'description',
        'name',   
        'start_date',
        'end_date',
        'status',
        'skill',
        'ongoing'

    ];
}
