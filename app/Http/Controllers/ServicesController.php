<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\header_option;
use App\Models\Services;
use App\Models\homepageSection;


class ServicesController extends Controller
{
    public function services(){
         $header = header_option::all();
         $content = homepageSection::where('id', '3')->value('content');
         $serv=Services::all();
        //  dd($serv);
        return view('services',compact('header','serv','content'));
    }
}
