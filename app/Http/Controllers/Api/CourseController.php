<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'explain_text' => 'required',
            'banner_address' => 'required|max:255',
            'member_count' => 'required|gte:0'
        ]);

        $kurss = Course::create($validated);
        return response()->json($kurss);
    }

    public function index()
    {
        $model = Course::all();
        return response()->json([
            $model
        ]);
    }
}