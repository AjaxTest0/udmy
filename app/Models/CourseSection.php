<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseSection extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function videos()
    {
    	return $this->hasMany(CourseSectionVideo::class, 'section_id', 'id');
    }
}
