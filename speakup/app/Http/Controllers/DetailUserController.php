<?php

namespace App\Http\Controllers;

use App\Models\DetailUser;
use Illuminate\Http\Request;

class DetailUserController extends Controller
{
    public function index()
    {
        $course = DetailUser::with('user', 'diary', 'education', 'course')->get();
        return response()->json($course);
    }
}
