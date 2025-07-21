@extends('layaout')

@section('title', 'Connexion - Brain Nova')

@section('content')
<div class="min-h-screen flex flex-col justify-center items-center bg-gradient-to-br from-[#316FB5] via-[#FDC416]/20 to-white py-12 px-4 sm:px-6 lg:px-8">
    <div class="w-full max-w-md bg-white rounded-2xl shadow-lg p-8 space-y-6 mt-24 mb-8">
        <div class="flex flex-col items-center mb-6">
            <img src="{{ asset('assets/img/logo1.jpg') }}" alt="Brain Nova" class="h-16 mb-2">
            <h2 class="text-2xl font-bold text-[#316FB5]">Connexion à Brain Nova</h2>
            <p class="text-sm text-gray-500">Bienvenue cher Admin, connectez-vous à votre espace</p>
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}" class="space-y-5">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" class="text-[#316FB5] font-semibold" />
                <input id="email" name="email" type="email"
                    class="block p-1 mt-1 w-full rounded-lg border border-[#316FB5] focus:border-[#FDC416] focus:ring-[#FDC416] focus:outline-none"
                    value="{{ old('email') }}" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div>
                <x-input-label for="password" :value="__('Mot de passe')" class="text-[#316FB5] font-semibold" />
                <input id="password" name="password" type="password"
                    class="block p-1 mt-1 w-full rounded-lg border border-[#316FB5] focus:border-[#FDC416] focus:ring-[#FDC416] focus:outline-none"
                    required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="flex items-center justify-between">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-[#316FB5] shadow-sm focus:ring-[#FDC416]" name="remember">
                    <span class="ms-2 text-sm text-gray-600">{{ __('Se souvenir de moi') }}</span>
                </label>
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-[#316FB5] hover:text-[#FDC416] rounded-md focus:outline-none" href="{{ route('password.request') }}">
                        {{ __('Mot de passe oublié ?') }}
                    </a>
                @endif
            </div>

            <div>
                <button type="submit" class="w-full flex justify-center items-center px-4 py-2 bg-[#316FB5] hover:bg-[#FDC416] text-white font-semibold rounded-lg shadow transition duration-200">
                    {{ __('Se connecter') }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
