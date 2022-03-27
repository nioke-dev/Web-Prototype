<?php

namespace App\Http\Controllers;

use App\Models\DetailCourse;
use Illuminate\Http\Request;

class DetailCourseController extends Controller
{
    public function index()
    {
        $course = DetailCourse::with('course')->get();
        return response()->json($course);
    }
}
