<?php

namespace App\Http\Controllers\adminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Projects;
use App\Models\header_option;

use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class adminDashboardController extends Controller
{

    public function adminDashboard()
    {

        $projectCount = Projects::count();
        $header = header_option::all();
        return view('admin.adminDashboard', compact('projectCount','header'));
    }
}
