<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class header_option extends Model
{
        protected $table = 'header';

    protected $fillable = [
        'option',
        'link',
        
    ];

    // If you are using timestamps (created_at, updated_at), you can leave this as default.
    // Otherwise, set public $timestamps = false;
    public $timestamps = true;
}
