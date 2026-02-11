<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'date',
        'expiry_date',
        'file',
        'description',
        'is_active',
    ];
}
