<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;

class ProjectController extends Controller
{
    public function index(User $user)
    {
        $projects = Project::all();
        dd($projects);
    }
}
