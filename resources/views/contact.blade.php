@extends('layaout')
@section('title', ' Contact - BrainNova')
@section('content')

<div class="bg-gray-800 opacity-98">
        <div class="relative isolate overflow-hidden pt-10">
            <img src="https://images.unsplash.com/photo-1498758536662-35b82cd15e29?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2102&q=80&blend=111827&sat=-100&exp=15&blend-mode=multiply" 
                alt="Une équipe travaillant ensemble dans un bureau moderne" 
                class="absolute inset-0 -z-10 h-full w-full object-cover">
            
            <div class="mx-auto max-w-2xl py-30 sm:py-48 lg:py-40 text-center">
                <h1 class="text-4xl font-bold tracking-tight text-[#EC673D] sm:text-6xl">Parlons de votre projet</h1>
                <p class="mt-6 text-lg px-6 leading-8 text-gray-300">Une idée, une question, ou un projet à nous soumettre ? Nous sommes à votre écoute. Remplissez le formulaire ou contactez-nous directement. Nous nous engageons à vous répondre dans les plus brefs délais.</p>
            </div>
        </div>
    </div>



<!-- ======================= Section Principale (Infos + Formulaire) ======================= -->
<div class=" py-24 sm:py-32 h-auto  w-full mx-auto bg-cover  bg-center" style="background-image: url('assets/img/bg.png') ">
    <div class="mx-auto max-w-7xl px-6 lg:px-20">
        <div class="mx-auto max-w-2xl lg:max-w-none lg:grid lg:grid-cols-2 lg:gap-x-16">
            
            <!-- Colonne Gauche : Informations de contact -->
            <div class="lg:max-w-lg shadow-[#0B4783] border-1 border-[#0B4783] shadow-md rounded-2xl p-10">
                <h2 class="text-2xl font-bold tracking-tight text-[#EC673D]">Contactez-nous directement</h2>
                <p class="mt-4 text-base leading-7 text-white">
                    Vous préférez un contact plus direct ? Voici comment nous joindre.
                </p>
                <dl class="mt-10 space-y-8 text-base leading-7 text-white">
                    <div class="flex gap-x-4">
                        <dt class="flex-none">
                            <span class="sr-only">Adresse</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-7 w-7 text-[#FDC416]" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18h18a2.25 2.25 0 012.25 2.25v10.5A2.25 2.25 0 0119.5 18.75H4.5A2.25 2.25 0 012.25 16.5V4.5A2.25 2.25 0 014.5 2.25z" /></svg>
                        </dt>
                        <dd>Douala, Cameroun</dd>
                    </div>
                    <div class="flex gap-x-4">
                        <dt class="flex-none">
                            <span class="sr-only">Téléphone</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-7 w-7 text-[#FDC416]" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" /></svg>
                        </dt>
                        <dd><a class="hover:text-gray-900" href="tel:+673026595">+237 6 56 58 54 44 / 673 02 65 95</a></dd>
                    </div>
                    <div class="flex gap-x-4">
                        <dt class="flex-none">
                            <span class="sr-only">Email</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-7 w-7 text-[#FDC416]" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" /></svg>
                        </dt>
                        <dd><a class="hover:text-gray-900" href="mailto:contact@brainnova.com">contact@brainnova.com</a></dd>
                    </div>
                </dl>
            </div>

            <!-- Colonne Droite : Formulaire -->
            <div class="mt-16 lg:mt-0 shadow-[#0B4783] border-1 border-[#0B4783] shadow-md rounded-2xl p-10 lg:col-span-1">
                <h2 class="text-2xl font-bold tracking-tight text-[#EC673D]">Envoyez-nous un message</h2>
                <form action="{{ route('contact.send') }}" method="POST" class="mt-8 ">
                    @csrf
                    <div class="grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
                        <div>
                            <label for="first_name" class="block text-md font-semibold leading-6 text-white">Prénom</label>
                            <div class="mt-2.5">
                                <input type="text" name="first_name" id="first_name" autocomplete="given-name" required class="block w-full rounded-md border-0 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-[#EC673D] sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div>
                            <label for="last_name" class="block text-md font-semibold leading-6 text-white">Nom</label>
                            <div class="mt-2.5">
                                <input type="text" name="last_name" id="last_name" autocomplete="family-name" required class="block w-full rounded-md border-0 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-[#EC673D] sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="email" class="block text-md font-semibold leading-6 text-white">Email</label>
                            <div class="mt-2.5">
                                <input type="email" name="email" id="email" autocomplete="email" required class="block w-full rounded-md border-0 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-[#EC673D] sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="tel" class="block text-md font-semibold leading-6 text-white">Tel</label>
                            <div class="mt-2.5">
                                <input type="tel" name="tel" id="tel" autocomplete="tel" required class="block w-full rounded-md border-0 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-[#EC673D] sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="subject" class="block text-md font-semibold leading-6 text-white">Sujet</label>
                            <div class="mt-2.5">
                                <input type="text" name="subject" id="subject" required class="block w-full rounded-md border-0 px-3.5 py-2    text-white shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-[#EC673D] sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="message" class="block text-md font-semibold leading-6 text-white">Votre Message</label>
                            <div class="mt-2.5">
                                <textarea name="message" id="message" rows="4" required class="block w-full rounded-md border-0 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-[#EC673D] sm:text-sm sm:leading-6"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="mt-10">
                        <button type="submit" class="block w-full rounded-md bg-[#FDC416] px-3.5 py-2.5 text-center text-md font-semibold text-white  shadow-sm hover:bg-white hover:text-[#FDC416] hover:border hover:border-[#FDC416]  focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-600">
                            Envoyer le message
                        </button>
                    </div>
                    
                    {{-- Affichage des messages de succès ou d'erreur --}}
                    @if (session('success'))
                        <p class="mt-4 text-sm text-green-600">{{ session('success') }}</p>
                    @endif
                </form>
            </div>
        </div>
    </div>
</div>

@endsection