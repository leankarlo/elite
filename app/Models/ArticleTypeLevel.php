<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class ArticleTypeLevel extends Model
{

    protected $table = 'article_type_levels';

    // Relationship between Images and Product Images
	public function articleType()
	{
		return $this->belongsTo('App\Models\ArticleType', 'article_type_id');
	}

}
