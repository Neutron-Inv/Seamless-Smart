<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
class VerifyController extends Controller
{


    public function index($uuid)
    {
        $project = Project::where('uuid', $uuid)->first();

        return view('verification', compact('project'));

    }

    public function service($route)
{
    // Define all services dynamically
    $services = [
        'cadastral-survey' => (object) [
            'name' => 'Cadastral Survey',
            'slug' => 'cadastral',
            'subline' => 'Accurate land boundary mapping for legal ownership and property development.',
            'title' => 'Comprehensive Cadastral Surveying Solutions'
        ],
        'topographical-survey' => (object) [
            'name' => 'Topographical Survey',
            'slug' => 'topographical',
            'subline' => 'Detailed mapping of land elevations and natural/man-made features.',
            'title' => 'Precision Topographical Surveying Solutions'
        ],
        'engineering-survey' => (object) [
            'name' => 'Engineering Survey',
            'slug' => 'engineering',
            'subline' => 'Geospatial data collection for infrastructure and construction projects.',
            'title' => 'Advanced Engineering Surveying Services'
        ],
        'drone-uav-survey' => (object) [
            'name' => 'Drone (UAV) Survey',
            'slug' => 'dronesurvey',
            'subline' => 'Aerial data collection for high-resolution mapping and site analysis.',
            'title' => 'Innovative Drone Surveying Solutions'
        ],
        'drone-data-processing' => (object) [
            'name' => 'Drone Data Processing',
            'slug' => 'dronedata',
            'subline' => 'Transforming aerial images into actionable geospatial insights.',
            'title' => 'High-Precision Drone Data Processing'
        ],
        'bathymetry-survey' => (object) [
            'name' => 'Bathymetry Survey',
            'slug' => 'bathymetry',
            'subline' => 'Hydrographic mapping for underwater terrain and depth analysis.',
            'title' => 'Comprehensive Bathymetric Surveying'
        ],
        'geospatial-visualization' => (object) [
            'name' => 'Geospatial Data Visualization & Analysis',
            'slug' => 'geospatial',
            'subline' => 'Transforming raw geospatial data into interactive and insightful visuals.',
            'title' => 'Advanced Geospatial Data Analysis & Visualization'
        ],
        'photogrammetry-spatial-data' => (object) [
            'name' => 'Photogrammetry & Spatial Data Management',
            'slug' => 'photogrammetry',
            'subline' => 'Accurate 3D modeling and mapping through aerial imagery and geospatial data handling.',
            'title' => 'Cutting-Edge Photogrammetry & Spatial Data Solutions'
        ],
    ];

    // Check if the route exists in the services array
    $service = $services[$route] ?? abort(404); // Show 404 if service is not found

    return view('services', compact('service'));
}

    public function sendContactForm(Request $request)
    {
        // Validate the request
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'message' => 'required|string',
        ]);

        // Email details
        $data = [
            'name'    => $request->input('name'),
            'email'   => $request->input('email'),
            'messageContent' => $request->input('message'),
        ];

        // Send email
        Mail::send('emails.contact', $data, function ($message) use ($data) {
            $message->to('jackomega.idnoble@gmail.com') // Change this to your recipient email
                    ->subject('New Contact Form Submission from ' . $data['name']);
        });

        return back()->with('success', 'Your message has been sent successfully!');
    }


}
