<?php 

namespace App\Model\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{


	
	/**
     * The attributes that are mass assignable.
     *
     * @var string
     */
	//use Notifiable;
	public $timestamps = false;

	protected $guard = "web";
	
	protected $table = 'users';
	
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name','phone', 'password', 'area', 'user_type', 'status', 'passwordResetCode'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['password'];
	
	//use user id of admin
	protected $primaryKey = 'id';
	
	//public $table = true;
	
}
