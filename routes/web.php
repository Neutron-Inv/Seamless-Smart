<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VerifyController;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;

Route::get('/', function () {
    return view('landing');
})->name('home');

Route::get('/projects/download-qr/{project}', function ($projectId) {
    $project = \App\Models\Project::findOrFail($projectId);

    if (!$project->qr_code || !Storage::disk('public')->exists($project->qr_code)) {
        abort(404, 'QR Code not found.');
    }

    return response()->download(storage_path("app/public/" . $project->qr_code));
})->name('projects.download_qr');

Route::get('/project/verify/{uuid}', [VerifyController::class, 'index'])->name('project.verify');
Route::get('/services/{service}', [VerifyController::class, 'service'])->name('services');