<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuoteRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name', 'last_name', 'company_name', 'function', 'industry',
        'company_size', 'city', 'country', 'email', 'phone', 'services',
        'project_goal', 'budget', 'start_delay', 'description', 'file_path',
        'has_worked_with_agency', 'meeting_preference', 'accepts_offers', 'accepts_policy',
        // Ajout des champs internes
        'internal_spec_file',
        'internal_budget',
        'start_date',
        'end_date',
        'team_members',
        'internal_notes'
    ];

    protected $casts = [
        'services' => 'array',
        'has_worked_with_agency' => 'boolean',
        'accepts_offers' => 'boolean',
        'accepts_policy' => 'boolean',
        // Ajout des castings pour les nouveaux champs
        'internal_budget' => 'decimal:2',
        'start_date' => 'date',
        'end_date' => 'date'
    ];
}
