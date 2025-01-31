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

    // append cover and images to the Post model
    protected $appends = ['cover', 'photos'];

    public function getCoverAttribute()
    {
        // cover is in the collection cover
        $cover = $this->getFirstMedia('cover');
        if ($cover) {
            $url =  $cover->getUrl();
            // replace localhost with localhost:8000
            return str_replace('localhost', 'localhost:8000', $url);
        }
        return null;
        
    }

    public function getPhotosAttribute()
    {
        // return array of photos in collection photos
        $photos = [];
        foreach ($this->getMedia('photos') as $media) {
            // replace localhost with localhost:8000
            $url = str_replace('localhost', 'localhost:8000', $media->getUrl());
            $photos[] = $url;
        }
        return $photos;
        
    }

    public function authors()
    {
        return $this->belongsToMany(Author::class);
    }

    // Relation avec les membres de l'équipe
    public function teamMembers()
    {
        return $this->belongsToMany(TeamMember::class, 'post_team_member');
    }
    
    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
              ->width(368)
              ->height(232)
              ->sharpen(10);
    }
}
