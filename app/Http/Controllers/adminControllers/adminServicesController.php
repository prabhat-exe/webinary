<?php

namespace App\Http\Controllers\adminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Projects;
use App\Models\header_option;
use App\Models\homepageSection;
// use App\Models\Reviews;
use App\Models\Clients;
use App\Models\Services;
use GuzzleHttp\Client;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class adminServicesController extends Controller
{

    public function adminServices()
    {
        $allServices = Services::all();


        return view('admin.adminService', compact('allServices'));
    }

    public function update(Request $request, $id)
    {
        $validator = $request->validate([
            'service_name' => 'required|string|max:255',
            'service_content' => 'required|string',
            'service_list' => 'required|string',
        ]);

        $service = Services::findOrFail($id);
        $service->update($request->only(['service_name', 'service_content', 'service_list']));

        return redirect()->route('adminServices')->with('success', 'Service updated successfully.');
    }



    public function delete(Request $request, $id)
    {
        $service = Services::findOrFail($id); // throws 404 if not found
        $service->delete();

        return redirect()->route('adminServices')->with('success', 'Service deleted successfully.');
    }
}
