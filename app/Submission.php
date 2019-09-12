<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Submission extends Model
{
    /**
      *For softDeletes
    */
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'submissions';

    /**
     * The attributes that are assignable.
     *
     * @var array
     */
    protected $fillable = [

        'estado',
        'id_user'

    ];

    /**
     * Get the User
     */
    public function user()
    {
        return $this->belongsTo('App\User','id_user');
    }

    /**
     * Get the submission
     */
    public function photography()
    {
        return $this->hasOne('App\Photography', 'id_submission');
    }
}
