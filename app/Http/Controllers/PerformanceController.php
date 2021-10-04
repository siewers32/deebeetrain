<?php

namespace App\Http\Controllers;

use App\Models\Performance;
use App\Http\Resources\PerformanceResource;
use Illuminate\Http\Request;

class PerformanceController extends Controller
{
    public function show(Performance $performance):PerformanceResource {
        return new PerformanceResource($performance);
    }

}

