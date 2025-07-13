@extends('layaout')
@section('title', ' A Propos - BrainNova')
@section('content')
    <div class="bg-gray-800 opacity-98">
        <div class="relative isolate overflow-hidden pt-10">
            <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2830&q=80&blend=111827&sat=-100&exp=15&blend-mode=multiply" 
                alt="Une équipe travaillant ensemble dans un bureau moderne" 
                class="absolute inset-0 -z-10 h-full w-full object-cover">
            
            <div class="mx-auto max-w-2xl py-30 sm:py-48 lg:py-40 text-center">
                <h1 class="text-4xl font-bold tracking-tight text-[#EC673D] sm:text-6xl">Votre avenir digital commence ici !</h1>
                <p class="mt-6 text-lg leading-8 text-gray-300">Nous sommes Brain Nova. Une équipe de passionnés dédiée à transformer vos idées en succès numériques concrets et mesurables.</p>
            </div>
        </div>
    </div>


    <div class="h-auto  w-full mx-auto bg-cover  bg-center" style="background-image: url('assets/img/bg.png') ">
        <div class="mx-auto max-w-7xl py-24 sm:py-32 px-6 lg:px-20">
            <div class="grid grid-cols-1 items-center gap-x-16 gap-y-16 lg:grid-cols-2">
                
                <div>
                    <img class="w-full aspect-[4/3] rounded-xl  object-cover lg:max-w-none" 
                        src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2850&q=80" 
                        alt="Équipe Brain Nova en réunion stratégique">
                </div>

                <div>
                    <div class="text-base text-white">
                        <h1 class="text-3xl font-bold tracking-tight text-[#EC673D] sm:text-4xl">Brain Nova : Votre partenaire pour l'innovation digitale.</h1>
                        <p class="mt-6">
                            Brain Nova est une start-up spécialisée dans la prestation de services technologiques innovants. Nous accompagnons les entreprises et les particuliers dans leur transformation digitale à travers des solutions sur mesure en développement web et mobile, UI/UX design, design graphique, hébergement web et marketing digital.
                        </p>
                        <p class="mt-4">
                            Notre vision est de rendre la technologie plus accessible, utile et impactante, en plaçant l’expérience utilisateur et la qualité au cœur de notre démarche. Grâce à une équipe passionnée et polyvalente, nous proposons des services modernes, créatifs et adaptés aux besoins de chaque client.
                        </p>
                        <p class="mt-4">
                            Chez Brain Nova, nous croyons que l'innovation digitale est un levier de croissance, et nous nous engageons à fournir des solutions fiables, esthétiques et performantes pour construire ensemble l’avenir numérique.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- ======================= Section Vision & Mission ======================= -->
<section class="py-20 sm:py-23 bg-gradient-to-b from-[#000C1B] to-[#0B4783]" >
    <div class="mx-auto max-w-7xl px-6 lg:px-20">
        <h2 class="text-center text-[#EC673D]  font-bold text-3xl pb-20">Notre Vision et Mission</h2>
        <div class="grid grid-cols-1 gap-x-8 gap-y-10 sm:gap-y-20 lg:grid-cols-2 lg:items-start">
            
            <!-- Carte Vision -->
            <div class="rounded-2xl bg-[#0B4783]  p-10 shadow-lg">
                <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-[#EC673D]">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-7 w-7 text-white"><path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" /><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                </div>
                <h3 class="mt-6 text-2xl font-bold text-[#FDC416]">Notre Vision</h3>
                <p class="mt-4 text-base text-white">
                    Devenir un acteur de référence en Afrique dans la prestation de services numériques innovants, en aidant les entreprises, start-up et entrepreneurs à réussir leur transformation digitale.
                </p>
            </div>
            
            <!-- Carte Mission -->
            <div class="rounded-2xl bg-[#0B4783]  p-10 shadow-lg">
                <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-[#316FB5]">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-7 w-7 text-white"><path stroke-linecap="round" stroke-linejoin="round" d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" /></svg>
                </div>
                <h3 class="mt-6 text-2xl font-bold text-[#FDC416]">Notre Mission</h3>
                <p class="mt-10 text-base text-white">
                    Fournir des solutions digitales sur mesure pour aider nos clients à grandir, innover et se démarquer en ligne.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- ======================= Section Nos Valeurs ======================= -->
<section class="bg-gradient-to-b from-[#000C1B] to-[#0B4783] py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-20">
        <div class="mx-auto max-w-2xl lg:text-center">
            <h2 class="text-3xl font-bold tracking-tight text-[#EC673D] sm:text-4xl">Nos valeurs, notre engagement</h2>
            <p class="mt-4 text-lg text-white">
                Chez Brain Nova, nos actions reposent sur des valeurs fortes qui guident chacun de nos projets.
            </p>
        </div>
        <dl class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-8  text-base leading-7 text-white/80 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3">
            
            <!-- Valeur 1: Innovation -->
            <div class="bg-[#0B4783] p-6 rounded-lg shadow-lg">
                <dt class="font-bold text-lg text-[#FDC416]">🚀 Innovation</dt>
                <dd class="mt-1">Créer des solutions modernes et utiles, toujours à la pointe des tendances digitales.</dd>
            </div>
            
            <!-- Valeur 2: Qualité -->
            <div class="bg-[#0B4783] p-6 rounded-lg shadow-lg">
                <dt class="font-bold text-lg text-[#FDC416]">⭐ Qualité</dt>
                <dd class="mt-1">Offrir un travail rigoureux, esthétique et performant.</dd>
            </div>
            
            <!-- Valeur 3: Engagement -->
            <div    class="bg-[#0B4783] p-6 rounded-lg shadow-lg">
                <dt class="font-bold text-lg text-[#FDC416]">🤝 Engagement</dt>
                <dd class="mt-1">Être à l’écoute de nos clients et aller au bout de chaque mission avec sérieux.</dd>
            </div>
            
            <!-- Valeur 4: Accessibilité -->
            <div class="bg-[#0B4783] p-6 rounded-lg shadow-lg">
                <dt class="font-bold text-lg text-[#FDC416]">💡 Accessibilité</dt>
                <dd class="mt-1">Rendre la technologie simple, compréhensible et adaptée à tous.</dd>
            </div>
            
            <!-- Valeur 5: Collaboration -->
            <div class="bg-[#0B4783] p-6 rounded-lg shadow-lg">
                <dt class="font-bold text-lg text-[#FDC416]">👥 Collaboration</dt>
                <dd class="mt-1">Travailler ensemble, en équipe et avec nos clients, dans un esprit de confiance.</dd>
            </div>

        </dl>
    </div>
</section>



<!-- ======================= Appel à l'Action Final ======================= -->
<!-- ... Votre section CTA ici ... -->
<section class="bg-gray-900 border-b border-white/50">
    <div class="mx-auto max-w-7xl px-6 py-24 sm:py-20 lg:px-20">
        <div class="relative isolate overflow-hidden px-6 py-15 text-center shadow-2xl rounded-3xl sm:px-16">
            <h2 class="mx-auto max-w-2xl text-3xl font-bold tracking-tight text-white sm:text-4xl">Prêt à construire l'avenir de votre marque avec nous ?</h2>
            <p class="mx-auto mt-6 max-w-xl text-lg leading-8 text-gray-300">Contactez-nous pour discuter de la manière dont nous pouvons vous aider à atteindre vos objectifs.</p>
            <div class="mt-10">
                <a href="{{-- route('contact') --}}" class="rounded-md bg-[#FDC416] px-5 py-3 text-base font-semibold text-white shadow-sm hover:bg-yellow-400 focus-visible:outline  focus-visible:outline-offset-2 focus-visible:outline-yellow-500">
                    Discutons de votre projet
                </a>
            </div>
        </div>
    </div>
</section>

@endsection