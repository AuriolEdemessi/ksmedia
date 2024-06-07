<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Post extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = ['title', 'type', 'author', 'description', 'category'];

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(368)
            ->height(232)
            ->sharpen(10);
    }
    
    public function getCoverUrlAttribute()
    {
        return $this->getFirstMediaUrl('cover') ?: 'default-image-url';
    }

    public function getPhotosUrlsAttribute()
    {
        return $this->getMedia('photos')->map(function (Media $media) {
            return $media->getUrl();
        })->all();
    }
}

