<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;


class User extends Authenticatable
{
    use Notifiable;
    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = [

         'name',
         'email',
         'phone',
         'country',
         'gender',
         'password',

     ];

    public function submissions(){
        return $this->hasMany('App\Submission','id_user');
    }
}
