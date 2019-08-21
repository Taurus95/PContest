<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Photography extends Model
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
    protected $table = 'photographies';

    /**
     * The attributes that are assignable.
     *
     * @var array
     */
    protected $fillable = [

        'image',
        'name',
        'description',
        'cameraDescription',
        'lensDescription',
        'ISO',
        'obsVelocity',
        'opening',
        'id_submission',
        'id_category'

    ];

    /**
     * Get the Category
     */
    public function category()
    {
        return $this->belongsTo('App\Category', 'id_category');
    }
    /**
     * Get the submission
     */
    public function submission()
    {
        return $this->belongsTo('App\Submission', 'id_submission');
    }

    /**
     * The tags
     */
    public function tags()
    {
        return $this->belongsToMany(
            'App\Tag',
            'photo_tag',
            'id_photography',
            'id_tag'
        )->withTimestamps();
    }
}
