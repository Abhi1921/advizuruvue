<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserVisa extends Model
{
    use HasFactory;
    protected $fillable = [
        'countrys_id',
        'visa_type',   
        'status',

    ];
}
