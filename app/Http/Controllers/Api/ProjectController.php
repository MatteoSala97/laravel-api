<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Models\Project;

class ProjectController extends Controller
{
    public function index(){

        //eager loading
        $project = Project::with('category', 'tags')-> paginate(3);

        return response()->json([
            'success'=> true,
            'projects' => $project
        ]);
    }

    public function show($slug){
        $project = Project::with('category', 'tags')-> where('slug', $slug)->first();

        if($project){
            return response()->json([
                'success'=> true,
                'projects' => $project
            ]);
        } else {
            return response()->json([
                'success'=> false,
                'error' => "The project you searched for does not exist"
            ]);
        }
    }
}
