<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['name'];

    public function teamMembers()
    {
        return $this->belongsToMany(TeamMember::class, 'team_member_role');
    }
}
