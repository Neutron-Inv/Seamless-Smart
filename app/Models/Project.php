<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
class Project extends Model
{
    protected $fillable = ['uuid', 'name', 'address', 'scale', 'eastings','northings','area','unit', 'no_pillars',
                           'pillar_nos','plan_no', 'status','date_registered', 'registered_by','qr_code', 'plan_file'];

    protected static function booted()
    {
        static::saved(function ($project) {
            \Log::info("Project saved: " . ($project->id ?? 'New Record'));
    
            // ✅ Ensure UUID exists before proceeding
            if (!$project->uuid) {
                $project->uuid = (string) Str::uuid();
                $project->saveQuietly(); // Avoid triggering saved() again
            }
    
            // ✅ Move File to Project Folder if needed
            self::moveFileToProjectFolder($project);
    
            // ✅ Generate and Save QR Code only if not already set
            if (!$project->qr_code) {
                $project->qr_code = self::generateQrCode($project);
                $project->saveQuietly(); // Avoid recursion
            }
        });

        // ✅ Delete Folder When Project is Deleted
    static::deleting(function ($project) {
        $folderPath = "projects/{$project->uuid}";

        if (Storage::disk('public')->exists($folderPath)) {
            Storage::disk('public')->deleteDirectory($folderPath);
        }
    });
    }
    
    protected static function moveFileToProjectFolder($record)
    {
        if (!empty($record->plan_file)) {
            $oldPath = "{$record->plan_file}"; // Temporary location
            $newPath = "projects/{$record->uuid}/{$record->plan_file}";
    
            // Ensure the target directory exists
            Storage::disk('public')->makeDirectory("projects/{$record->uuid}");
    
            // Move file only if it exists
            if (Storage::disk('public')->exists($oldPath)) {
                Storage::disk('public')->move($oldPath, $newPath);
                \Log::info("File moved from $oldPath to $newPath");
            } else {
                \Log::warning("File $oldPath not found, skipping move.");
            }
        }
    }
    
    protected static function generateQrCode($record)
    {
        $folderPath = "projects/{$record->uuid}";
        Storage::disk('public')->makeDirectory($folderPath);
    
        $qrPath = "$folderPath/qr_code.png";
        $qrContent = url("/projects/verify/{$record->uuid}");
    
        \Log::info("Generating QR Code for: " . $qrContent); // Debugging log
    
        Storage::disk('public')->put($qrPath, QrCode::format('png')->size(200)->generate($qrContent));
    
        return $qrPath; // Return path to store in DB
    }
                           
                       
}
