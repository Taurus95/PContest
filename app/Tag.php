<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Tag extends Model
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
    protected $table = 'tags';

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
     * The tipo_producto that belong to the atributo.
     */
    public function photographies()
    {
        return $this->belongsToMany('App\Photograpy','photo_tag',
        'id_tag','id_photography')->withTimestamps();
    }
}
