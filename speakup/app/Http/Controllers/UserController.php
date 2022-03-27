<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $course = User::with('detailUser', 'role')->get();
        return response()->json($course);
    }
}
