
@extends('admin.layout')

@section('content')
    <h2 class="text-2xl font-bold text-[#316FB5] mb-6">Bienvenue, {{ Auth::user()->name }} !</h2>
    <div class="bg-white rounded-xl shadow p-8 mb-8">
        <p class="text-gray-600">Vous êtes connecté à l’espace d’administration de <span class="font-bold text-[#FDC416]">Brain Nova</span>.</p>
    </div>
    
@endsection

