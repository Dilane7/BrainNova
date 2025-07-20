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
        Schema::create('quote_requests', function (Blueprint $table) {
            $table->id();
            
            // Infos Personnelles/Entreprise
            $table->string('first_name');
            $table->string('last_name');
            $table->string('company_name')->nullable();
            $table->string('function')->nullable();
            $table->string('industry');
            $table->string('company_size');
            $table->string('city');
            $table->string('country');
            $table->string('email');
            $table->string('phone');

            // Infos Projet
            $table->json('services'); // On stocke les services cochés en format JSON
            $table->text('project_goal');
            $table->string('budget')->nullable();
            $table->string('start_delay');
            $table->text('description');
            $table->string('file_path')->nullable(); // Chemin vers le cahier des charges
            $table->boolean('has_worked_with_agency');
            $table->string('meeting_preference')->nullable();

            // Consentement
            $table->boolean('accepts_offers');
            $table->boolean('accepts_policy');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quote_requests');

    }
};
