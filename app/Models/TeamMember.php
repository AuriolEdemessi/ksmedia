<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class TeamMember extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'name', 'role', 'description', 'profile_picture',
    ];

    public function getProfilePictureUrlAttribute()
    {
        $profilePicture = $this->getFirstMedia('profile_picture');
        if ($profilePicture) {
            $url = $profilePicture->getUrl();
            // Replace localhost with localhost:8000 if needed
            return str_replace('localhost', 'localhost:8000', $url);
        }
        return null;
    }
}
