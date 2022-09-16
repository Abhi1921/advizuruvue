<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecializedProfile extends Model
{
    use HasFactory;
    protected $fillable = [
        'description',
        'year_of_experience',   
        'current_company',
        'available',
        'status',
        'skill_id',
        'availability'

    ];
}
