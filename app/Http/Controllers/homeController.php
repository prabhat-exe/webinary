<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;
use App\Models\Projects;
use App\Models\header_option;
use App\Models\homepageSection;
use App\Models\Clients;




use App\Models\Reviews;

class homeController extends Controller
{
    public function home()
    {
        // https://subtlelabs.com/our-services.php
        // $services = Services::all();
        // $homepagedata=homepageSection::all();
        // dd($homepagedata);

        $sections = homepageSection::all()->keyBy('section');

        $services = Services::pluck('service_name');
        $projects = Projects::where('homeview', 1)->get();


        //    $reviews = Reviews::latest()->paginate(9); // ✅ Correct
        $reviews = Clients::where('homeview', 1)->get();
        // dd($reviews);
        $header = header_option::all();
        // dd($header);


        return view('home', compact('sections', 'services', 'projects', 'reviews', 'header'));
    }

    public function submit(Request $request)
    {
        // Validate & handle the data
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // You can store it or send email here
        // For now, redirect with success
        return back()->with('success', 'Your message has been sent!');
    }
}
