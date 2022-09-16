<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProject extends Model
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
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'skill_id' => 'integer',
    ];

}
