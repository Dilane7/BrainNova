<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\QuoteRequest;
use Illuminate\Http\Request;

class QuoteDashboardController extends Controller
{
    public function index()
    {
        $quotes = QuoteRequest::latest()->paginate(15); // Récupère les devis, les plus récents en premier

        return view('admin.quotes.index', compact('quotes'));
    }

    public function show(QuoteRequest $quote)
    {
        return view('admin.quotes.show', compact('quote'));
    }
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function updateStatus(Request $request, QuoteRequest $quote)
    {
        $request->validate([
            'status' => 'required|in:Prospect,En cours,Terminé',
        ]);
        $quote->status = $request->status;
        $quote->save();

        return back()->with('success', 'Statut mis à jour.');
    }
    public function updateInternal(Request $request, QuoteRequest $quote)
    {
        $data = $request->validate([
            'internal_spec_file' => 'nullable|file|mimes:pdf,doc,docx,zip',
            'internal_budget' => 'nullable|numeric',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'team_members' => 'nullable|string',
            'internal_notes' => 'nullable|string',
        ]);

        // Gérer l’upload du fichier
        if ($request->hasFile('internal_spec_file')) {
            $data['internal_spec_file'] = $request->file('internal_spec_file')->store('internal_specs', 'public');
        }

        $quote->update($data);

        return back()->with('success', 'Informations internes enregistrées.');
    }
}