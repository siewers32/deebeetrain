<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Performance extends Model
{
    use HasFactory;
    public function course() {
        return $this->belongsTo(Course::class, 'course_id');
    }

    public function employees() {
        return $this->belongsToMany(Performance::class, )->using(EmployeePerformance::class);
    }

//    public function trainer() {
//        return $this->belongsTo(Performance::class, 'trainer');
//    }


}
