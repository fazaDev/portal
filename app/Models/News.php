<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'category_id',
        'user_id',
        'title',
        'slug',
        'thumbnail',
        'excerpt',
        'content',
        'is_published',
        'published_at',
        'views',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'og_image',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getMetaTitleAttribute()
    {
        return $this->meta_title ?? $this->title;
    }

    public function getMetaDescriptionAttribute()
    {
        return $this->meta_description ?? $this->excerpt;
    }

    public function getMetaKeywordsAttribute()
    {
        return $this->meta_keywords ?? $this->title;
    }

    public function getOgImageAttribute()
    {
        return $this->og_image ?? $this->thumbnail;
    }

    public function getPublishedDateAttribute()
    {
        return $this->published_at->format('Y-m-d');
    }

    public function getPublishedTimeAttribute()
    {
        return $this->published_at->format('H:i');
    }
}
