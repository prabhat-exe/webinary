<?php

namespace App\Http\Controllers\adminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Projects;
use App\Models\header_option;
use App\Models\homepageSection;
// use App\Models\Reviews;
use App\Models\Clients;
use GuzzleHttp\Client;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class adminHomeController extends Controller
{

    public function adminHome()
    {

        $projectCount = Projects::count();
        $allProjects = Projects::all();
        // $header = header_option::all();
        // $firstsection = homepageSection::where('section', 'first')->first();
        $sections = homepageSection::all()->keyBy('section'); // Optional: or just ->all()
        // return view('admin.adminHome', compact('sections'));
        $reviews=Clients::all();

        return view('admin.adminHome', compact('projectCount', 'sections', 'allProjects','reviews'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $section = homepageSection::findOrFail($id);
        $section->title = $request->input('title');
        $section->content = $request->input('content');
        $section->save();

        return redirect()->back()->with('success', 'Section updated successfully!');
    }


    public function updateHomeview(Request $request)
    {
        $selectedIds = $request->input('projects', []); // IDs where checkbox is checked
        // dd($selectedIds);
        // Reset all to 0
        Projects::query()->update(['homeview' => 0]);

        // Set selected to 1
        Projects::whereIn('id', $selectedIds)->update(['homeview' => 1]);

        return redirect()->back()->with('success', 'Home view projects updated successfully.');
    }
    
    public function updatereviewHomeview(Request $request)
    {
        $selectedIds = $request->input('reviews', []); // IDs where checkbox is checked
        // dd($selectedIds);
        // Reset all to 0
        Clients::query()->update(['homeview' => 0]);

        // Set selected to 1
        Clients::whereIn('id', $selectedIds)->update(['homeview' => 1]);

        return redirect()->back()->with('success', 'Home view Reviews updated successfully.');
    }
}
