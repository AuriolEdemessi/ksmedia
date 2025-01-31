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

    // Relation avec les rôles
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'team_member_role');
    }

    // Relation avec les posts
    public function posts()
    {
        return $this->belongsToMany(Post::class, 'post_team_member');
    }
    
    // Création automatique d'un Author lors de la création d'un TeamMember
    protected static function booted()
    {
        static::created(function ($teamMember) {
            Author::create(['name' => $teamMember->name]);
        });
    }
    
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
