<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Models\Project;

class ProjectController extends Controller
{
    public function index(){

        $posts = Project::with('category', 'tags')-> get();





        return response()->json([
            'success'=> true,
            'projects' => $posts
        ]);
    }
}
