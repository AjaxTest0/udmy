<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCourse extends Model
{
    use HasFactory;

    public function Course()
    {
        return $this->morphedByMany(Course::class);
    }

    /**
     * Get all of the videos that are assigned this tag.
     */
    public function User()
    {
        return $this->morphedByMany(User::class);
    }
}
