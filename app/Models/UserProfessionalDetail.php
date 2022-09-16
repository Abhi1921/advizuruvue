<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfessionalDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'landline_no',
        'total_experience_month', 
        'current_designation',
        'availability',
        'current_company',
        'joining_availability',
        'resume'

    ];
}
