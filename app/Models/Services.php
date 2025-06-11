<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    // Table name (optional if it follows Laravel's plural naming convention)
    protected $table = 'services';

    // Fields that are mass assignable
    protected $fillable = [
        'service_name',
        'service_content',
        'service_list',
    ];

    // If you are using timestamps (created_at, updated_at), you can leave this as default.
    // Otherwise, set public $timestamps = false;
    public $timestamps = false;

    // If your primary key is different or not auto-incrementing, you can specify like this:
    // protected $primaryKey = 'id';
    // public $incrementing = true;
    protected $dates = ['created_at'];

}
