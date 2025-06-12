<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    protected $table = 'reviews';

    protected $fillable = [
        'client_name',
        'designation',
        'comment',
        
    ];

    // If you are using timestamps (created_at, updated_at), you can leave this as default.
    // Otherwise, set public $timestamps = false;
    public $timestamps = true;
}
