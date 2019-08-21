<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Category extends Model
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
    protected $table = 'categories';

    /**
     * The attributes that are assignable.
     *
     * @var array
     */
    protected $fillable = [

        'name',
        'description'

    ];

    /**
     * Get the photographies sthat belong to this category
     */
    public function Photographies()
    {
        return $this->hasMany('App\Photography','id_category');
    }

}
