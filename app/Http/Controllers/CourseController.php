<?php

namespace App\Http\Controllers;

use App\Http\Resources\CourseResource;
use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function show(Course $course):CourseResource {
        return new CourseResource($course);
    }

}
