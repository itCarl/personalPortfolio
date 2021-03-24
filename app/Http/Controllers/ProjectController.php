<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    public function show() 
    {
        // TODO  get all Projects and display them 

        return view("projects");
    }
}
