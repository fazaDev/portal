<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = [
        'title',
        'description',
        'date',
        'is_active',
    ];

    public function images()
    {
        return $this->hasMany(GalleryImage::class)->orderBy('order');
    }
    }
