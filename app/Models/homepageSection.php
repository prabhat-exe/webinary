<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class homepageSection extends Model
{
  
    // Table name (optional if it follows Laravel's plural naming convention)
    protected $table = 'homepagesections';

    // Fields that are mass assignable
    protected $fillable = [
        'section',
        'content',
    ];

    // If you are using timestamps (created_at, updated_at), you can leave this as default.
    // Otherwise, set public $timestamps = false;
    public $timestamps = true;

   
}
