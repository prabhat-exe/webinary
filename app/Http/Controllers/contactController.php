<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\header_option;

class contactController extends Controller
{
    public function contact(){

          $header = header_option::all();
        return view('contactUs', compact('header'));
    }
}
