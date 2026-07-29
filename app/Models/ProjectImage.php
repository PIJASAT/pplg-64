<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectImage extends Model
{
    const UPDATED_AT = null;

    protected $fillable = ['project_id', 'image', 'description'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
