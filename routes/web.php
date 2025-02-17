<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;

Route::get('/', function () {
    return view('landing');
});

Route::get('/projects/download-qr/{project}', function ($projectId) {
    $project = \App\Models\Project::findOrFail($projectId);

    if (!$project->qr_code || !Storage::disk('public')->exists($project->qr_code)) {
        abort(404, 'QR Code not found.');
    }

    return response()->download(storage_path("app/public/" . $project->qr_code));
})->name('projects.download_qr');