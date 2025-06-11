<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;

class homeController extends Controller
{
    public function home()
    {
        // https://subtlelabs.com/our-services.php
        // $services = Services::all();
        $services = Services::pluck('service_name');
        return view('home', compact('services'));
    }
}
