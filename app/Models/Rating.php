<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    const UPDATED_AT = null;

    protected $fillable = [
        'user_name', 'rating', 'rateable_id', 'rateable_type',
    ];

    public function rateable()
    {
        return $this->morphTo();
    }
}
