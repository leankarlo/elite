<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class UserAccessModule extends Model
{

    protected $table = 'user_access_module';

    /*
    public function AccessType()
    {
        return $this->hasOne('App\Models\UserAccess','id','access_id');
    }
    */
    
    public function Module()
    {
        return $this->hasMany('App\Models\Module','id','module_id')->distinct();
    }

    /*
    public function SubModule()
	{
        return $this->hasMany('App\Models\SubModule','id','sub_module_id');
    }
    */
    /*
    public function User()
    {
    	return $this->belongsTo('App\Models\User','user_access', 'access_id');
    }
    */
    
}
    