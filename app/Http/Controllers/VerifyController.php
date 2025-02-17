<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Str;
class VerifyController extends Controller
{


    public function index($uuid)
    {
        $project = Project::where('uuid', $uuid)->first();

        return view('verification', compact('project'));

    }

}
