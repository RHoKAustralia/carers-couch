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
      return $this->belongsToMany(Role::class);
    }

    public function authorizeRoles($roles)
    {
      if (is_array($roles)) {
          return $this->hasAnyRole($roles) || 
                 abort(401, 'This action is unauthorized.');
      }
      return $this->hasRole($roles) || 
             abort(401, 'This action is unauthorized.');
    }
    /**
    * Check multiple roles
    * @param array $roles
    */
    public function hasAnyRole($roles)
    {
      return null !== $this->roles()->whereIn(‘name’, $roles)->first();
    }
    /**
    * Check one role
    * @param string $role
    */
    public function hasRole($role)
    {
      return null !== $this->roles()->where(‘name’, $role)->first();
    }
    
    	// user has many posts
	public function posts()
	{
		return $this->hasMany('App\Posts','author_id');
	}
	
	// user has many comments
	public function comments()
	{
		return $this->hasMany('App\Comments','from_user');
	}
	
	public function can_post()
	{
    /*
		$role = $this->role;
		if($role == 'author' || $role == 'admin')
		{
			return true;
		} 
    return false;
    */
		return true;
	}
	
	public function is_admin()
	{
    /*
		$role = $this->role;
		if($role == 'admin')
		{
			return true;
		}
    return true;
    */
		return true;
	}

}
