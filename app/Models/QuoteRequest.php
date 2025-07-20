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
        'has_worked_with_agency', 'meeting_preference', 'accepts_offers', 'accepts_policy'
    ];

    protected $casts = [
        'services' => 'array', // Laravel convertira automatiquement ce champ en tableau
        'has_worked_with_agency' => 'boolean',
        'accepts_offers' => 'boolean',
        'accepts_policy' => 'boolean',
    ];
}
