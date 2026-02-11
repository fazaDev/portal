<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'category',
        'year',
        'file',
        'file_size',
        'is_published',
    ];
}
