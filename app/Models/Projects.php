<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    protected $table = 'projects';

    protected $fillable = [
        'title',
        'description',
        'image',
        'link',
    ];

    // If you are using timestamps (created_at, updated_at), you can leave this as default.
    // Otherwise, set public $timestamps = false;
    public $timestamps = true;
}
