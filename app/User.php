<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Role;
use Illuminate\Support\Facades\Hash;

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

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The roles that belong to the user.
     * 
     * @return Relationship
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class, RoleUser::class, 'user_id', 'role_id');
    }

    /**
     * Get the role name.
     *
     * @return string
     */
    public function getRoleAttribute()
    {
        $role = "";
        foreach ($this->roles as $role) {
            $role = $role['name'];
        }
        return $role;
    }

    /**
     * set the password.
     *
     * @param string $value
     * @return void
     */
    public function setPasswordAttribute(string $value)
    {
        $this->attributes['password'] = Hash::make($value);
    }

    /**
     * return flag if user is admin or not.
     *
     * @return boolean
     */
    public function isAdmin()
    {
        return $this->roles()->where('name', 'Admin')->exists();
    }
}
