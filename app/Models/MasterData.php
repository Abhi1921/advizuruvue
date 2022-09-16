<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\masterData as Authenticatable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterData extends Model
{
    
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'role_id', 'title', 'name','first_name', 'last_name', 'type','mobile', 'profile_photo', 'email', 'password', 'organization_name', 'designation', 'short_bio', 'address', 'status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function devices()
    {
        return $this->hasMany('App\Models\LoginTrack', 'user_id');
    }

    public function role()
    {
        return $this->belongsTo('App\Models\Roles', 'role_id');
        //return $this->belongsTo('App\Models\Roles');
    }

    /**
     * @param string|array $roles
     */
    public function authorizeRole($role)
    {
        return $this->hasRole($role) ||
            abort(401, 'This action is unauthorized.');
    }
    /**
     * Check multiple roles
     * @param array $roles
     */
    public function hasRole($role)
    {
        return $this->role->name == $role ? true : false;
    }

    public function getFullNameAttribute(){
        return "{$this->first_name} {$this->last_name}";
    }

}