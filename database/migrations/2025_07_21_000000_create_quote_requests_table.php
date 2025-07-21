<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('quote_requests', function (Blueprint $table) {
            $table->id();
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
            $table->json('services');
            $table->text('project_goal');
            $table->string('budget')->nullable();
            $table->string('start_delay');
            $table->text('description');
            $table->string('file_path')->nullable();
            $table->boolean('has_worked_with_agency');
            $table->string('meeting_preference')->nullable();
            $table->boolean('accepts_offers');
            $table->boolean('accepts_policy');
            // Ajout du champ status
            $table->string('status')->default('Prospect');
            // Ajout des champs internes
            $table->string('internal_spec_file')->nullable();
            $table->decimal('internal_budget', 10, 2)->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('team_members')->nullable();
            $table->text('internal_notes')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('quote_requests');
    }
};