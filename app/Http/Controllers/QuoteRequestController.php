<?php

namespace App\Http\Controllers;

use App\Models\QuoteRequest;
use Illuminate\Http\Request;

class QuoteRequestController extends Controller
{
    public function create()
    {
        return view('quote.create');
    }

    public function store(Request $request)
    {
        // 1. Validation
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'company_name' => 'nullable|string|max:255',
            'function' => 'nullable|string|max:255',
            'industry' => 'required|string',
            'company_size' => 'required|string',
            'city' => 'required|string',
            'country' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'services' => 'required|array',
            'project_goal' => 'required|string',
            'budget' => 'nullable|string',
            'start_delay' => 'required|string',
            'description' => 'required|string',
            'file' => 'nullable|file|mimes:pdf,doc,docx,zip|max:10240', // 10MB max
            'has_worked_with_agency' => 'required|boolean',
            'meeting_preference' => 'nullable|string',
            'accepts_offers' => 'required|accepted',
            'accepts_policy' => 'required|accepted',
        ]);
        
        // 2. Gestion du fichier uploadé
        if ($request->hasFile('file')) {
            $path = $request->file('file')->store('cahiers-de-charge', 'public');
            $validatedData['file_path'] = $path;
        }

        // 3. Sauvegarde en base de données
        QuoteRequest::create($validatedData);

        // 4. Notification (par e-mail par exemple, à ajouter plus tard)
        // Mail::to('admin@brainnova.com')->send(new NewQuoteRequestMail($validatedData));

        // 5. Redirection avec un message de succès
        return back()->with('success', 'Votre demande de devis a été envoyée avec succès ! Nous vous recontacterons très prochainement.');
    }

    public function index()
    {
        $quotes = QuoteRequest::latest()->get();
        return view('admin.quotes.index', compact('quotes'));
    }
    protected $fillable = [
    // autres champs...
    'internal_spec_file',
    'internal_budget',
    'start_date',
    'end_date',
    'team_members',
    'internal_notes',
];
}


