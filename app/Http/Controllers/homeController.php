<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;
use App\Models\Projects;

use App\Models\Reviews;

class homeController extends Controller
{
    public function home()
    {
        // https://subtlelabs.com/our-services.php
        // $services = Services::all();
        $services = Services::pluck('service_name');
        $projects=Projects::all();
    //    $reviews = Reviews::latest()->paginate(9); // ✅ Correct
        $reviews=Reviews::all();

        return view('home', compact('services','projects','reviews'));
    }
}
