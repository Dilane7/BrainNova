{{-- resources/views/admin/quotes/show.blade.php --}}

<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Détail de la demande de devis #{{ $quote->id }}
            </h2>
            <a href="{{ route('admin.quotes.index') }}" class="text-sm text-gray-600 hover:text-gray-900 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Retour à la liste
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-3 gap-8">
            
            <!-- Colonne principale : Informations sur le projet -->
            <div class="lg:col-span-2 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                    <h3 class="text-lg font-bold text-gray-900 border-b pb-2 mb-4">Informations sur le projet</h3>
                    
                    <dl class="space-y-4">
                        <div>
                            <dt class="text-sm font-medium text-gray-500">Services demandés</dt>
                            <dd class="mt-1 text-sm text-gray-900">
                                @foreach($quote->services as $service)
                                    <span class="inline-block bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded-full">{{ ucfirst(str_replace('_', ' ', $service)) }}</span>
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
                                    <a href="{{ Storage::url($quote->file_path) }}" target="_blank" class="text-indigo-600 hover:text-indigo-900 font-semibold flex items-center">
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
            </div>

            <!-- Colonne de droite : Informations client et logistique -->
            <div class="space-y-8">
                <!-- Bloc Contact Client -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <h3 class="text-lg font-bold text-gray-900 mb-4">Contact Client</h3>
                        <dl class="space-y-2">
                            <div><dt class="font-semibold">Nom :</dt><dd>{{ $quote->first_name }} {{ $quote->last_name }}</dd></div>
                            @if($quote->company_name)<div><dt class="font-semibold">Entreprise :</dt><dd>{{ $quote->company_name }}</dd></div>@endif
                            @if($quote->function)<div><dt class="font-semibold">Fonction :</dt><dd>{{ $quote->function }}</dd></div>@endif
                            <div><dt class="font-semibold">Email :</dt><dd><a href="mailto:{{ $quote->email }}" class="text-indigo-600">{{ $quote->email }}</a></dd></div>
                            <div><dt class="font-semibold">Téléphone :</dt><dd><a href="tel:{{ $quote->phone }}" class="text-indigo-600">{{ $quote->phone }}</a></dd></div>
                            <div><dt class="font-semibold">Localisation :</dt><dd>{{ $quote->city }}, {{ $quote->country }}</dd></div>
                        </dl>
                    </div>
                </div>

                <!-- Bloc Logistique -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <h3 class="text-lg font-bold text-gray-900 mb-4">Détails Logistiques</h3>
                        <dl class="space-y-2">
                            <div><dt class="font-semibold">Budget estimé :</d><dd>{{ $quote->budget ?? 'Non spécifié' }}</dd></div>
                            <div><dt class="font-semibold">Délai de démarrage :</d><dd>{{ ucfirst(str_replace('_', ' ', $quote->start_delay)) }}</dd></div>
                            <div><dt class="font-semibold">A déjà travaillé avec une agence :</d><dd>{{ $quote->has_worked_with_agency ? 'Oui' : 'Non' }}</dd></div>
                             @if($quote->meeting_preference)<div><dt class="font-semibold">Préférence de RDV :</dt><dd>{{ $quote->meeting_preference }}</dd></div>@endif
                        </dl>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>