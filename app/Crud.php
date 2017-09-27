<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
	/**
	 *
	 * We need to create a protected field in the Crud model. 
	 * Otherwise, it will throw a mass assignment exception. 
	 *
	 */
    protected $fillable = ['title','post'];
}
