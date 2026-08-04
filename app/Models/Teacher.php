<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    
    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function trainingCenter()
    {
        return $this->belongsTo(Training_center::class, 'training_center_id');
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'course_teacher');
    }
}
