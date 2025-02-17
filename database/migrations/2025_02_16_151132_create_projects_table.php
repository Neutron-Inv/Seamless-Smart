<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->index();
            $table->string('name');
            $table->text('address')->nullable();
            $table->string('scale')->nullable();
            $table->string('eastings')->nullable();
            $table->string('northings')->nullable();
            $table->string('area')->nullable();
            $table->string('unit')->nullable();
            $table->string('no_pillars')->nullable();
            $table->string('pillar_nos')->nullable();
            $table->string('plan_no');
            $table->string('status')->nullable();
            $table->string('date_registered');
            $table->string('registered_by')->nullable();
            $table->string('qr_code')->nullable();
            $table->string('plan_file')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
