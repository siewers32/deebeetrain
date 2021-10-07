<?php

namespace App\Http\Controllers;

use App\Http\Resources\CourseResource;
use App\Http\Resources\CourseResourceCollection;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function index():CourseResourceCollection {
//        return new CourseResourceCollection(Course::paginate(2));
//    }

    public function index(Request $request, $col) {
        if(in_array($col, ['id', 'description','all'])) {
            if ($col == 'all') { $col = "*"; }
            return response(["data" => DB::table('courses')->get($col)], HTTP_OK);
        } else {
            return response(["code"=>"401", "error" => "Resource not available"]);
        }
    }

    public function show(Request $request, $col, $id) {
        if(in_array($col, ['id','description','all']) && is_numeric($id)) {
            if ($col == 'all') { $col = "*"; }
            return array('data' => DB::table('courses')
                ->where('id', $id)
                ->get($col)
            );
        } else {
            return [
                "error" => "It's not possible to access this resource",
                "code" => 401
            ];
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function with(Course $course):CourseResource {
       return new CourseResource($course);
   }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
