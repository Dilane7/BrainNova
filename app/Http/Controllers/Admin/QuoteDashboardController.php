<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\QuoteRequest;

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
}