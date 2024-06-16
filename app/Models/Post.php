<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;
use App\Models\Author;

class Post extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'body',
        'cover',
        'type',
        'category',
    ];

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function authors()
    {
        return $this->belongsToMany(Author::class);
    }
}
