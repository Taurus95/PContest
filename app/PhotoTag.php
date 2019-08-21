<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class PhotoTag extends Pivot
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'photo_tag';
    /**
     * The attributes that are assignable.
     *
     * @var array
     */
    protected $fillable = [
      'id_photography',
      'id_tag'
    ];
}
