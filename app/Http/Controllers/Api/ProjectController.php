<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Models\Project;

class ProjectController extends Controller
{
    public function index(){

        //eager loading
        $posts = Project::with('category', 'tags')-> paginate(3);

        return response()->json([
            'success'=> true,
            'projects' => $posts
        ]);
    }
}
