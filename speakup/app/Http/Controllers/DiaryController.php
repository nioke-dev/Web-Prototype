<?php

namespace App\Http\Controllers;

use App\Models\Diary;
use Illuminate\Http\Request;

class DiaryController extends Controller
{
    public function index()
    {
        $course = Diary::with('detailUser')->get();
        return response()->json($course);
    }
}
