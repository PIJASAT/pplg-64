<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'user_id', 'name', 'photo', 'email', 'bio', 'position',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class, 'teacher_subject');
    }

    public function classes()
    {
        return $this->hasMany(SchoolClass::class, 'homeroom_teacher_id');
    }
}
