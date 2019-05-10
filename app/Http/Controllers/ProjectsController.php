<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\project;
class ProjectsController extends Controller
{
    public function index1(){
        $Projects = project::all();
        // return $Projects;
        return view('index',['Projects'=>$Projects]);
    }

    public function create(){
        return view('create');
    }
}
