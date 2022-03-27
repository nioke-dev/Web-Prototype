<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{

    public function index()
    {
        $course = Course::with('courseType', 'detailUser', 'detailCourse')->get();
        return response()->json($course);
    }
}
