{{-- resources/views/admin/quotes/index.blade.php --}}
@extends('admin.layout')

@section('content')
    <h2 class="text-2xl font-bold text-[#316FB5] mb-6">Liste des devis clients</h2>
    <div class="overflow-x-auto bg-white rounded-xl shadow p-6">
        <table class="min-w-full">
            <thead>
                <tr class="bg-[#316FB5]/10 text-[#316FB5]">
                    <th class="px-4 py-2 text-left">Nom</th>
                    <th class="px-4 py-2 text-left">Email</th>
                    <th class="px-4 py-2 text-left">Téléphone</th>
                    <th class="px-4 py-2 text-left">Date</th>
                    <th class="px-4 py-2 text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($quotes as $quote)
                    <tr class="border-b hover:bg-[#FDC416]/10">
                        <td class="px-4 py-2 align-middle">
                            {{ $quote->first_name ?? '' }} {{ $quote->last_name ?? '' }}
                        </td>
                        <td class="px-4 py-2 align-middle">{{ $quote->email }}</td>
                        <td class="px-4 py-2 align-middle">{{ $quote->phone }}</td>
                        <td class="px-4 py-2 align-middle">{{ $quote->created_at->format('d/m/Y H:i') }}</td>
                        <td class="px-4 py-2 align-middle">
                            <a href="{{ route('admin.quotes.show', $quote) }}"
                               class="inline-block px-3 py-1 bg-[#316FB5] text-white rounded hover:bg-[#254e7e] transition">
                                Détails
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center text-gray-400 py-4">Aucun devis reçu.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection