<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    const UPDATED_AT = null;

    protected $fillable = [
        'user_name', 'email', 'content', 'commentable_id', 'commentable_type', 'is_approved',
    ];

    protected $casts = [
        'is_approved' => 'boolean',
    ];

    public function commentable()
    {
        return $this->morphTo();
    }
}
