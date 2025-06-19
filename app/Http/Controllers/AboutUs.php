<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\header_option;
use App\Models\homepageSection;
use App\Models\Clients;
use App\Models\Projects;


class AboutUs extends Controller
{
    public function aboutus()
    {

        $header = header_option::all();
        $content = homepageSection::where('id', '2')->value('content');
        $totalClients=Clients::count();
        $totalProjects=Projects::count();

        return view('about',compact('header','content','totalClients','totalProjects'));
    }
}
