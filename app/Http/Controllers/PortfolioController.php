<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\header_option;
use App\Models\Projects;

class PortfolioController extends Controller
{
    public function portfolio(){
        $header = header_option::all();
        $projects=Projects::all();
        return view('portfolio',compact('header','projects'));
    }
}
