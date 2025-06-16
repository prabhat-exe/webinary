<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\header_option;


class AboutUs extends Controller
{
    public function aboutus()
    {

        $header = header_option::all();

        return view('about',compact('header'));
    }
}
