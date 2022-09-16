<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSkills extends Model
{
    use HasFactory;
    protected $fillable = [
        'description',
        'year_of_experience',   
        'current_company',
        'available',
        'status',
        'skill_id',

    ];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'skill_id' => 'integer',
    ];

}
