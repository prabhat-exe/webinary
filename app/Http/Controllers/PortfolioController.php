<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\header_option;
use App\Models\Projects;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Illuminate\Support\Facades\Log;

//to get the data in the app section you need to run "node node-scripts/fetchAppDetails.js" in your terminal
class PortfolioController extends Controller
{
    public function portfolio()
    {
        $header = header_option::all();
        $projects = Projects::orderBy('id', 'desc')->get();
        return view('portfolio', compact('header', 'projects'));
    }


    public function appsportfolio()
{
    $header = header_option::all();

    // Get all non-null Play Store IDs and store them in a JSON file
    $apps = Projects::whereNotNull('playstoreId')->pluck('playstoreId')->toArray();
    $appIdsPath = base_path('storage/app/app_ids.json');
    file_put_contents($appIdsPath, json_encode($apps, JSON_PRETTY_PRINT));

    Log::info('App IDs written to JSON:', $apps);

    // Read the apps.json file generated manually (by running the Node script)
    $appsJsonPath = base_path('storage/app/public/apps.json');

    if (!file_exists($appsJsonPath)) {
        Log::error('apps.json not found. Make sure to run the Node script manually.');
        return view('portfolio', compact('header'))->withErrors(['error' => 'App data not found. Please run the fetch script.']);
    }

    $appsDataRaw = file_get_contents($appsJsonPath);
    $appsData = json_decode($appsDataRaw, true);

    Log::info('Apps JSON loaded.');

    return view('portfolio', compact('header', 'appsData'));
}

}
