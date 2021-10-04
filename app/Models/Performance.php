<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Performance extends Model
{
    use HasFactory;
    public function course() {
        return $this->belongsTo(Course::class);
    }

    public function employees() {
        return $this->belongsToMany(Employee::class, )->using(EmployeePerformance::class);
    }

//    public function trainer() {
//        return $this->belongsTo(Performance::class, 'trainer');
//    }


}
