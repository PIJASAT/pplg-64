<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title', 'slug', 'thumbnail', 'description', 'github_url', 'demo_url', 'featured',
    ];

    protected $casts = [
        'featured' => 'boolean',
    ];

    public function images()
    {
        return $this->hasMany(ProjectImage::class);
    }

    public function technologies()
    {
        return $this->belongsToMany(Technology::class, 'project_technology');
    }

    public function members()
    {
        return $this->belongsToMany(Student::class, 'project_members')->withPivot('role');
    }

    public function ratings()
    {
        return $this->morphMany(Rating::class, 'rateable');
    }
}
