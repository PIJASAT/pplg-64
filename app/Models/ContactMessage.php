<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    const UPDATED_AT = null;

    protected $fillable = ['name', 'email', 'subject', 'message', 'is_read'];

    protected $casts = [
        'is_read' => 'boolean',
    ];
}
