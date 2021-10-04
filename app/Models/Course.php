<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    public function performances() {
        return $this->hasMany(Performance::class);
    }

    public function employees() {
        return $this->hasManyThrough(Employee::class, Performance::class);
    }


}
