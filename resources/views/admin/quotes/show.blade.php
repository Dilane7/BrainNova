{{-- resources/views/admin/quotes/show.blade.php --}}

@extends('admin.layout')

@section('content')
    <div class="flex items-center justify-between mb-8">
        <h2 class="text-2xl font-bold text-[#316FB5]">Devis #{{ $quote->id }}</h2>
        <a href="{{ route('admin.quotes.index') }}"
           class="inline-flex items-center px-4 py-2 bg-[#316FB5] text-white rounded hover:bg-[#254e7e] transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
            </svg>
            Retour à la liste
        </a>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Colonne principale : Informations sur le projet -->
        <div class="lg:col-span-2 bg-white rounded-xl shadow p-8">
            <h3 class="text-lg font-bold text-[#316FB5] border-b pb-2 mb-4">Informations sur le projet</h3>
            <dl class="space-y-4">
                <div>
                    <dt class="text-sm font-medium text-gray-500">Services demandés</dt>
                    <dd class="mt-1 text-sm text-gray-900">
                        @foreach($quote->services as $service)
                            <span class="inline-block bg-[#FDC416]/20 text-[#316FB5] text-xs font-semibold mr-2 px-2.5 py-0.5 rounded-full">{{ ucfirst(str_replace('_', ' ', $service)) }}</span>
                        @endforeach
                    </dd>
                </div>
                <div>
                    <dt class="text-sm font-medium text-gray-500">Objectif principal du projet</dt>
                    <dd class="mt-1 text-sm text-gray-900">{{ $quote->project_goal }}</dd>
                </div>
                <div>
                    <dt class="text-sm font-medium text-gray-500">Description détaillée du besoin</dt>
                    <dd class="mt-1 text-sm text-gray-900 whitespace-pre-wrap">{{ $quote->description }}</dd>
                </div>
                @if($quote->file_path)
                    <div>
                        <dt class="text-sm font-medium text-gray-500">Cahier des charges</dt>
                        <dd class="mt-1 text-sm">
                            <a href="{{ Storage::url($quote->file_path) }}" target="_blank" class="text-[#316FB5] hover:text-[#FDC416] font-semibold flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                </svg>
                                Télécharger le fichier joint
                            </a>
                        </dd>
                    </div>
                @endif
            </dl>
        </div>

        

        <!-- Colonne de droite : Informations client et logistique -->
        <div class="space-y-8">
            <!-- Bloc Contact Client -->
            <div class="bg-white rounded-xl shadow p-6">
                <h3 class="text-lg font-bold text-[#316FB5] mb-4">Contact Client</h3>
                <dl class="space-y-2">
                    <div><dt class="font-semibold">Nom :</dt><dd>{{ $quote->first_name }} {{ $quote->last_name }}</dd></div>
                    @if($quote->company_name)<div><dt class="font-semibold">Entreprise :</dt><dd>{{ $quote->company_name }}</dd></div>@endif
                    @if($quote->function)<div><dt class="font-semibold">Fonction :</dt><dd>{{ $quote->function }}</dd></div>@endif
                    <div><dt class="font-semibold">Email :</dt><dd><a href="mailto:{{ $quote->email }}" class="text-[#316FB5] hover:text-[#FDC416]">{{ $quote->email }}</a></dd></div>
                    <div><dt class="font-semibold">Téléphone :</dt><dd><a href="tel:{{ $quote->phone }}" class="text-[#316FB5] hover:text-[#FDC416]">{{ $quote->phone }}</a></dd></div>
                    <div><dt class="font-semibold">Localisation :</dt><dd>{{ $quote->city }}, {{ $quote->country }}</dd></div>
                </dl>
            </div>

            <!-- Bloc Logistique -->
            <div class="bg-white rounded-xl shadow p-6">
                <h3 class="text-lg font-bold text-[#316FB5] mb-4">Détails Logistiques</h3>
                <dl class="space-y-2">
                    <div><dt class="font-semibold">Budget estimé :</dt><dd>{{ $quote->budget ?? 'Non spécifié' }}</dd></div>
                    <div><dt class="font-semibold">Délai de démarrage :</dt><dd>{{ ucfirst(str_replace('_', ' ', $quote->start_delay)) }}</dd></div>
                    <div><dt class="font-semibold">A déjà travaillé avec une agence :</dt><dd>{{ $quote->has_worked_with_agency ? 'Oui' : 'Non' }}</dd></div>
                    @if($quote->meeting_preference)
                        <div><dt class="font-semibold">Préférence de RDV :</dt><dd>{{ $quote->meeting_preference }}</dd></div>
                    @endif
                </dl>
            </div>

            
        </div>
    </div>

    <!-- Bloc Informations internes -->
            <div class="bg-white rounded-xl shadow p-6 mt-10">
                <h3 class="text-lg font-bold text-[#316FB5] mb-4">Informations internes du projet</h3>
                @if($quote->internal_spec_file || $quote->internal_budget || $quote->start_date || $quote->end_date || $quote->team_members || $quote->internal_notes)
                    <div class="mb-6">
                        <h4 class="text-md font-semibold text-[#316FB5] mb-2">Données enregistrées :</h4>
                        <ul class="text-sm text-gray-700 space-y-1">
                            @if($quote->internal_spec_file)
                                <li>
                                    <span class="font-medium">Cahier des charges interne :</span>
                                    <a href="{{ Storage::url($quote->internal_spec_file) }}" target="_blank" class="text-[#316FB5] hover:text-[#FDC416] underline">
                                        Télécharger
                                    </a>
                                </li>
                            @endif
                            @if($quote->internal_budget)
                                <li><span class="font-medium">Budget :</span> {{ $quote->internal_budget }} €</li>
                            @endif
                            @if($quote->start_date)
                                <li><span class="font-medium">Date de début :</span> {{ \Carbon\Carbon::parse($quote->start_date)->format('d/m/Y') }}</li>
                            @endif
                            @if($quote->end_date)
                                <li><span class="font-medium">Date de fin :</span> {{ \Carbon\Carbon::parse($quote->end_date)->format('d/m/Y') }}</li>
                            @endif
                            @if($quote->team_members)
                                <li><span class="font-medium">Équipe projet :</span> {{ $quote->team_members }}</li>
                            @endif
                            @if($quote->internal_notes)
                                <li><span class="font-medium">Notes internes :</span> {{ $quote->internal_notes }}</li>
                            @endif
                        </ul>
                    </div>
                @endif
                <form action="{{ route('admin.quotes.internal.update', $quote) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Cahier des charges interne (fichier)</label>
                        <input type="file" name="internal_spec_file" class="w-full rounded border-gray-300">
                        @if($quote->internal_spec_file)
                            <div class="mt-2">
                                <a href="{{ Storage::url($quote->internal_spec_file) }}" target="_blank" class="text-[#316FB5] hover:text-[#FDC416] underline">
                                    Télécharger le cahier des charges interne actuel
                                </a>
                            </div>
                        @endif
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Budget du travail (€)</label>
                        <input type="number" name="internal_budget" class="w-full rounded border-gray-300" value="{{ old('internal_budget', $quote->internal_budget) }}">
                    </div>
                    <div class="mb-4 flex gap-4">
                        <div class="flex-1">
                            <label class="block text-sm font-medium text-gray-700 mb-1">Date de début</label>
                            <input type="date" name="start_date" class="w-full rounded border-gray-300" value="{{ old('start_date', $quote->start_date) }}">
                        </div>
                        <div class="flex-1">
                            <label class="block text-sm font-medium text-gray-700 mb-1">Date de fin</label>
                            <input type="date" name="end_date" class="w-full rounded border-gray-300" value="{{ old('end_date', $quote->end_date) }}">
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Membres de l'équipe projet</label>
                        <input type="text" name="team_members" class="w-full rounded border-gray-300" value="{{ old('team_members', $quote->team_members) }}" placeholder="Ex: Alice, Bob, Charlie">
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Notes internes</label>
                        <textarea name="internal_notes" class="w-full rounded border-gray-300" rows="2">{{ old('internal_notes', $quote->internal_notes) }}</textarea>
                    </div>
                    <button type="submit" class="px-4 py-2 bg-[#316FB5] text-white rounded hover:bg-[#254e7e] transition">Enregistrer</button>
                </form>
            </div>
@endsection