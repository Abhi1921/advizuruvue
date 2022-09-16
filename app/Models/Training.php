<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    use HasFactory;
    protected $fillable = [
        'specialized_profile_id',
        'tittle',   
        'agenda',
        'agenda_preface',
        'skills',
        'training_mode',
        'start_date'

    ];
}
