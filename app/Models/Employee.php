<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    public function performances() {
        return $this->belongsToMany(Performance::class)->using(EmployeePerformance::class);
    }
}
