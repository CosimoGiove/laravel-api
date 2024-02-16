<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Technology;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return response()->json([
            "success" => true,
            "results" => $projects
        ]);
    }
    public function show(string $id)
    {

        $projects = Project::where('id', $id)->first();

        return response()->json([
            'success' => true,
            'data' => $projects
        ]);
    }
}
