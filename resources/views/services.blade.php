@extends('layaout')
@section('title', ' Services - BrainNova')
@section('content')
    <main>
        <section  class=" h-auto text-center py-12 w-full px-6 sm:px-6 lg:px-20 mx-auto bg-cover mt-20 bg-center" style="background-image: url('assets/img/bg.png') ">>
            <div class="mx-auto max-w-4xl py-15 text-center">
            <h1 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">
                Des solutions digitales conçues pour <span class="text-[#EC673D]">votre croissance</span>
            </h1>
            <p class="mt-6 text-lg leading-8 text-white/90">
                Que vous ayez besoin d'un site web performant, d'une identité visuelle percutante ou d'une stratégie marketing pour atteindre vos clients, nos services sont conçus pour s'intégrer parfaitement et générer des résultats concrets.
            </p>
            <div class="mt-10 flex items-center justify-center gap-x-6">
                <a href="{{route('contact')}}" class="rounded-md bg-[#316FB5] px-5 py-3 text-base font-semibold text-white shadow-sm hover:bg-blue-700  focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">
                    Discutons de votre projet
                </a>
                <a href="#details-services" class="text-base font-semibold leading-6 text-[#EC673D]">
                    Voir nos services en détail <span aria-hidden="true">→</span>
                </a>
            </div>
        </div>
        </section>

        <section id="details-services" class=" relative isolate py-20 sm:py-24">
            
            <!-- Image de fond et overlay -->
            <div class="absolute inset-0 -z-10">
                <img class="h-full w-full object-cover" 
                    src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2830&q=80&blend=111827&sat=-100&exp=15&blend-mode=multiply" 
                    alt="Espace de travail moderne et collaboratif en arrière-plan">
                
                <!-- Overlay pour assombrir et assurer la lisibilité -->
                <div class="absolute inset-0 bg-black/65"></div>
            </div>

            <div class="max-w-7xl mx-auto px-6 sm:px-6 lg:px-20">
                
                <!-- Titre de la section -->
                <div class="text-center mb-16">
                    <h2 class="text-3xl font-bold tracking-tight text-[#EC673D] sm:text-4xl">Nos Domaines d'Expertise</h2>
                    <p class="mt-4 max-w-3xl mx-auto text-lg text-gray-300">
                        Des solutions complètes pour accompagner chaque étape de votre transformation digitale.
                    </p>
                </div>

                <!-- Grille responsive pour les cartes -->
                <div class="grid gap-8 md:grid-cols-2">

                    <!-- Carte 1: Développement Web -->
                    <!-- Style "verre dépoli" appliqué à chaque carte -->
                    <div class="rounded-2xl bg-white/5 shadow-md shadow-[#316FB5] p-8 backdrop-blur-md ring-1 ring-white/10 transition-shadow duration-300 hover:ring-white/20">
                        <div class="flex items-center gap-x-4 mb-5">
                            <div class="flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-lg bg-[#316FB5] text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" /></svg>
                            </div>
                            <h3 class="text-2xl font-bold text-white">Développement Web</h3>
                        </div>
                        <p class="text-gray-300 mb-6">Nous créons des plateformes web robustes, performantes et sur mesure qui captivent vos utilisateurs et atteignent vos objectifs.</p>
                        <ul class="space-y-3 text-gray-200">
                            <li class="flex items-center gap-x-3"><svg class="h-5 w-5 text-[#EC673D] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" /></svg>Sites vitrine & e-commerce</li>
                            <li class="flex items-center gap-x-3"><svg class="h-5 w-5 text-[#EC673D] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" /></svg>Applications web et mobiles</li>
                            <li class="flex items-center gap-x-3"><svg class="h-5 w-5 text-[#EC673D] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" /></svg>Intégration CMS (WordPress, Shopify...)</li>
                        </ul>
                    </div>
                    
                    <!-- Carte 2: UI/UX & Design Visuel -->
                    <div class="rounded-2xl bg-white/5 shadow-md shadow-[#316FB5] p-8 backdrop-blur-md ring-1 ring-white/10 transition-shadow duration-300 hover:ring-white/20">
                        <div class="flex items-center gap-x-4 mb-5">
                            <div class="flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-lg bg-[#EC673D] text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" /></svg>
                            </div>
                            <h3 class="text-2xl font-bold text-white">UI/UX & Design Visuel</h3>
                        </div>
                        <p class="text-gray-300 mb-6">Nous concevons des expériences intuitives et des identités visuelles mémorables qui créent une connexion avec votre audience.</p>
                        <ul class="space-y-3 text-gray-200">
                            <li class="flex items-center gap-x-3"><svg class="h-5 w-5 text-[#FDC416] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" /></svg>UI/UX Design (web & mobile)</li>
                            <li class="flex items-center gap-x-3"><svg class="h-5 w-5 text-[#FDC416] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" /></svg>Maquettes interactives (Figma)</li>
                            <li class="flex items-center gap-x-3"><svg class="h-5 w-5 text-[#FDC416] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" /></svg>Identité visuelle & charte graphique</li>
                        </ul>
                    </div>

                    <!-- Carte 3: Hébergement & Services Web -->
                    <div class="rounded-2xl bg-white/5 shadow-md shadow-[#316FB5] p-8 backdrop-blur-md ring-1 ring-white/10 transition-shadow duration-300 hover:ring-white/20">
                        <div class="flex items-center gap-x-4 mb-5">
                            <div class="flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-lg bg-gray-800 text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" /></svg>
                            </div>
                            <h3 class="text-2xl font-bold text-white">Hébergement & Services Web</h3>
                        </div>
                        <p class="text-gray-300 mb-6">Assurez la rapidité, la sécurité et la disponibilité de votre site avec une infrastructure fiable et un support technique réactif.</p>
                        <ul class="space-y-3 text-gray-200">
                            <li class="flex items-center gap-x-3"><svg class="h-5 w-5 text-[#FDC416] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" /></svg>Hébergement web sécurisé & NDD</li>
                            <li class="flex items-center gap-x-3"><svg class="h-5 w-5 text-[#FDC416] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" /></svg>Certificats SSL & mise en ligne</li>
                            <li class="flex items-center gap-x-3"><svg class="h-5 w-5 text-[#FDC416] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" /></svg>Sauvegardes & performance</li>
                        </ul>
                    </div>

                    <!-- Carte 4: Marketing Digital -->
                    <div class="rounded-2xl bg-white/5 shadow-md shadow-[#316FB5] p-8 backdrop-blur-md ring-1 ring-white/10 transition-shadow duration-300 hover:ring-white/20">
                        <div class="flex items-center gap-x-4 mb-5">
                            <div class="flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-lg bg-[#FDC416] text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" /></svg>
                            </div>
                            <h3 class="text-2xl font-bold text-white">Marketing Digital</h3>
                        </div>
                        <p class="text-gray-300 mb-6">Un site magnifique a besoin d'être vu. Nous construisons des stratégies pour attirer du trafic qualifié, générer des leads et booster votre croissance.</p>
                        <ul class="space-y-3 text-gray-200">
                            <li class="flex items-center gap-x-3"><svg class="h-5 w-5 text-[#EC673D] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" /></svg>Community management & Social Ads</li>
                            <li class="flex items-center gap-x-3"><svg class="h-5 w-5 text-[#EC673D] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" /></svg>Création de contenus & Publicité</li>
                            <li class="flex items-center gap-x-3"><svg class="h-5 w-5 text-[#EC673D] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" /></svg>Référencement naturel (SEO) & payant (SEA)</li>
                        </ul>
                    </div>

                    <!-- Carte 5: Impression (Centrée car la grille a 2 colonnes) -->
                    <!-- md:col-span-2 permet à cette carte de prendre toute la largeur sur les écrans moyens et plus -->
                    <div class="rounded-2xl bg-white/5 shadow-md shadow-[#316FB5] p-8 backdrop-blur-md ring-1 ring-white/10 transition-shadow duration-300 hover:ring-white/20 md:col-span-2">
                        <div class="flex items-center gap-x-4 mb-5">
                            <div class="flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-lg bg-gray-500 text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0110.56 0m-10.56 0L6 3.369m0 0c1.07 1.664 2.29 3.182 3.62 4.582M6 3.369l-1.88-1.88-1.88 1.88m3.76 0L6 6.369m7.5-3l-1.88-1.88-1.88 1.88m3.76 0L13.5 6.369m-7.5 0h10.5m-10.5 0v10.5m0-10.5c0 3.314 2.686 6 6 6h1.5m-1.5 0v-6.086c0-3.314 2.686-6 6-6v6.086c0 3.314-2.686 6-6 6h-1.5m-1.5 0H5.625c-.621 0-1.125-.504-1.125-1.125v-1.5c0-.621.504-1.125 1.125-1.125H9.75" /></svg>
                            </div>
                            <h3 class="text-2xl font-bold text-white">Impression & Objets Publicitaires</h3>
                        </div>
                        <p class="text-gray-300 mb-6">Prolongez votre identité au-delà de l'écran avec des supports de communication et des objets personnalisés qui laissent une impression mémorable.</p>
                        <ul class="space-y-3 text-gray-200 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:space-y-0">
                            <li class="flex items-center gap-x-3"><svg class="h-5 w-5 text-green-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" /></svg>Impression de supports (cartes, flyers...)</li>
                            <li class="flex items-center gap-x-3"><svg class="h-5 w-5 text-green-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" /></svg>Gadgets personnalisés (textiles, stylos...)</li>
                            <li class="flex items-center gap-x-3"><svg class="h-5 w-5 text-green-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" /></svg>Brochures et catalogues</li>
                            <li class="flex items-center gap-x-3"><svg class="h-5 w-5 text-green-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" /></svg>Bannières et signalétiques</li>
                        </ul>
                    </div>

                </div>
            </div>
        </section>

        <section  class=" relative isolate py-20 sm:py-24">
            
            <!-- Image de fond et overlay -->
            <div class="absolute inset-0 -z-10">
                <img class="h-full w-full object-cover" 
                    src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2830&q=80&blend=111827&sat=-100&exp=15&blend-mode=multiply" 
                    alt="Équipe en pleine séance de collaboration et de planification.">
                
                <!-- Overlay pour assombrir et assurer la lisibilité -->
                <div class="absolute inset-0 bg-black/70"></div>
            </div>

            <div class="max-w-7xl mx-auto px-6 sm:px-6 lg:px-20">
                <div class="text-center mb-16">
                    <h2 class="text-3xl font-bold tracking-tight text-[#EC673D] sm:text-4xl">Notre Approche Collaborative</h2>
                    <p class="mt-4 max-w-3xl mx-auto text-lg text-gray-300">Un processus clair et transparent pour garantir le succès de votre projet à chaque étape.</p>
                </div>
                <div class="grid gap-y-12 md:grid-cols-2 lg:grid-cols-4 lg:gap-x-8 text-center">
                    <!-- Étape 1 -->
                    <div>
                        <!-- Le cercle a maintenant un effet "verre dépoli" -->
                        <div class="flex items-center justify-center h-16 w-16 rounded-full bg-white/10 backdrop-blur-sm text-[#4A7DC7]  text-2xl font-bold mx-auto mb-4 ring-1 ring-white/20">01</div>
                        <h4 class="text-xl font-semibold mb-2 text-[#FDC416]">Écoute & Stratégie</h4>
                        <p class="text-gray-300">Nous commençons par écouter vos besoins et définir ensemble des objectifs clairs et mesurables.</p>
                    </div>

                    <!-- Étape 2 -->
                    <div>
                        <div class="flex items-center justify-center h-16 w-16 rounded-full bg-white/10 backdrop-blur-sm text-[#4A7DC7]  text-2xl font-bold mx-auto mb-4 ring-1 ring-white/20">02</div>
                        <h4 class="text-xl font-semibold mb-2 text-[#FDC416]">Création & Conception</h4>
                        <p class="text-gray-300">Nos designers créent des maquettes et des visuels qui incarnent votre vision et séduisent votre audience.</p>
                    </div>

                    <!-- Étape 3 -->
                    <div>
                        <div class="flex items-center justify-center h-16 w-16 rounded-full bg-white/10 backdrop-blur-sm text-[#4A7DC7] text-2xl font-bold mx-auto mb-4 ring-1 ring-white/20">03</div>
                        <h4 class="text-xl font-semibold mb-2 text-[#FDC416]">Développement & Réalisation</h4>
                        <p class="text-gray-300">Nos développeurs transforment les designs en une solution fonctionnelle, rapide et sécurisée.</p>
                    </div>

                    <!-- Étape 4 -->
                    <div>
                        <div class="flex items-center justify-center h-16 w-16 rounded-full bg-white/10 backdrop-blur-sm text-[#4A7DC7]  text-2xl font-bold mx-auto mb-4 ring-1 ring-white/20">04</div>
                        <h4 class="text-xl font-semibold mb-2 text-[#FDC416]">Lancement & Croissance</h4>
                        <p class="text-gray-300">Nous vous accompagnons après la mise en ligne pour assurer le suivi, la maintenance et la croissance continue.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

