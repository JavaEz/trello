<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles()
    {
        return $this->belongsToMany('App\Models\Role');
    }

    public function projects()
    {
        return $this->belongsToMany('App\Models\Project');
    }
    public function boards()
    {
        return $this->belongsToMany('App\Models\Board');
    }
    public function tasks()
    {
        return $this->belongsToMany('App\Models\Task');
    }
}
