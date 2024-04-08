<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ProjectController extends Controller
{
    public function index(){
        return response()->json([
            'name' => 'Hello',
            'name-2' =>'World',
        ]);
    }
}
