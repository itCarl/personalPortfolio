<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectDetailModel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "project_details";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'priority',
        'title',
        'short_description',
        'description',
        'tags',
        'image',
    ];
}
