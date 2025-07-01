@extends('layaout')
@section('title', ' Acceuil - BrainNova')
@section('content')
    <main>
        <!-- =========== Section Héros =========== -->
        <section id="accueil" class="bg-gray-50 pt-20  ">
            <div class="container mx-auto">
                <div class="flex-shrink-0 w-full">
                    <img src="{{ asset('assets/img/hero1.jpg') }}" alt="image section hero" class="h-auto w-full object-cover">
                </div>
            </div>
                <div class="absolute top-35 mx-auto  px-4 sm:px-6 lg:px-20 w-1/2">
                    <h1 class="text-2xl md:text-6xl font-semibold text-white leading-tight">
                    Passer à la vitesse digitale avec <span class="bg-clip-text  text-[#EC673D]">Brain Nova</span>
                    </h1>
                    <p class="mt-4 max-w-3xl mx-auto font-light text-sm md:text-lg text-white">
                        Des solutions créatives en <span class="font-medium"><strong>Développement Web</strong></span>,<span class="font-medium">  <strong>UI/UX Design</strong></span>, <span class="font-medium"><strong>Design Graphique</strong></span> et <span class="font-medium"><strong>Marketing Digital</strong></span> pour transformer votre présence en ligne et atteindre vos objectifs.
                    </p>
                    <div class="mt-8 flex justify-between ">
                        <a href="#services" class="bg-[#FDC416] flex gap-2 items-center text-white px-3 py-3 rounded-full font-semibold text-md hover:bg-white hover:border hover:border-[#FDC416] hover:text-[#FDC416] transition duration-300">
                            <span>Découvrir nos services</span>
                            <div class="flex items-center  justify-center h-8 w-8 rounded-full bg-white text-[#FDC416]">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25" />
                                </svg>
                            </div>
                        </a>
                        <a href="#realisations" class=" text-[#316FB5] flex gap-2 items-center bg-white px-3 py-3 rounded-full font-semibold text-md hover:bg-white hover:text-[#FDC416] hover:border hover:border-[#FDC416] transition duration-300">
                            <span>Demander un devis</span>
                            <div class="flex items-center  justify-center h-8 w-8 rounded-full bg-[#316FB5] text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25" />
                                </svg>
                            </div>
                        </a>
                        
                    </div>
                </div>
                <div class="flex items-center gap-2 absolute top-80 left-180 text-white  bg-black animate-bounce duration-700 rounded-full py-2 px-2  font-semibold text-md ">
                    <div class="flex items-center  justify-center h-8 w-8 rounded-full bg-[#316FB5] text-white">
                           <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" /></svg>
                    </div>
                    Developpement Web
                </div>
                <div class="flex items-center gap-2 absolute top-35 left-250 text-[#316FB5]  bg-white animate-bounce rounded-full py-2 px-2  font-semibold text-md ">
                    <div class="flex items-center  justify-center h-8 w-8 rounded-full bg-[#316FB5] text-white">
                           <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" /></svg>
                    </div>
                    Marketing Digital
                </div>
                <div class="flex items-center gap-2 absolute top-150 left-250 text-white  bg-black animate-bounce rounded-full py-2 px-2  font-semibold text-md ">
                    <div class="flex items-center  justify-center h-8 w-8 rounded-full bg-[#316FB5] text-white">
                           <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" /></svg>
                    </div>
                    Design Graphique
                </div>
                <div class="flex items-center gap-2 absolute top-90 left-270 text-[#316FB5]  bg-white animate-bounce rounded-full py-2 px-2  font-semibold text-md ">
                    <div class="flex items-center  justify-center h-8 w-8 rounded-full bg-[#316FB5] text-white">
                           <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" /></svg>
                    </div>
                    UI/UX Design
                </div>
            
        </section>

        <!-- =========== Section Services =========== -->
        <section id="services" class="py-10 bg-gradient-to-b from-[#000C1B] to-[#0B4783] ">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center">
                    <h2 class="text-3xl font-bold tracking-tight text-[#EC673D] sm:text-4xl">Nos Services</h2>
                    <p class="mt-4 max-w-2xl mx-auto text-lg text-white">
                        Votre Partenaire Digital Tout-en-Un.
                    </p>
                </div>
                
                <div class="mt-12 grid gap-10 md:grid-cols-2 lg:grid-cols-3 mx-auto px-4 sm:px-6 lg:px-15">
                    <!-- Service 1: Développement Web -->
                    <div class="text-white bg-[#0B4783] p-8 rounded-lg shadow-sm hover:shadow-xl transition-shadow duration-300 ">
                        <div class="flex items-center justify-center h-15 w-15 rounded-md bg-[#316FB5] text-white">
                           <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" /></svg>
                        </div>
                        <h3 class="mt-5 text-xl font-semibold  ">Développement Web sur Mesure</h3>
                        <p class="mt-2 text-base ">Sites performants, sécurisés et optimisés pour l'expérience utilisateur. Du site vitrine à l'e-commerce.</p>
                        <a class="flex   pt-2 ">
                            <span class="bg-[#FDC416] flex items-center rounded-md gap-2 px-2">
                                <span class="text-md font-semibold  py-1  ">Voir plus</span>
                                <img src="{{asset('assets/img/right-up.png')}}" class="h-5" alt="">
                            </span>
                            
                        </a>
                    </div>
                    <!-- Service 2: Design Graphique -->
                    <div class="bg-[#0B4783] text-white p-8 rounded-lg shadow-sm hover:shadow-xl transition-shadow duration-300">
                        <div class="flex items-center justify-center h-15 w-15 rounded-md bg-[#EC673D] text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" /></svg>
                        </div>
                        <h3 class="mt-5 text-xl font-semibold ">Design Graphique & Identité Visuelle</h3>
                        <p class="mt-2 text-base ">Des identités visuelles percutantes et des supports qui captivent votre audience et racontent votre histoire.</p>
                        <a class="flex pt-2 mt-6">
                            <span class="bg-[#FDC416] flex items-center rounded-md gap-2 px-2">
                                <span class="text-md font-semibold  py-1  ">Voir plus</span>
                                <img src="{{asset('assets/img/right-up.png')}}" class="h-5" alt="">
                            </span>
                        </a>
                    </div>
                    <!-- Service 3: Marketing Digital -->
                    <div class="bg-[#0B4783] text-white p-8 rounded-lg shadow-sm hover:shadow-xl transition-shadow duration-300">
                        <div class="flex items-center justify-center h-15 w-15 rounded-md bg-[#FDC416] text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" /></svg>
                        </div>
                        <h3 class="mt-5 text-xl font-semibold ">Stratégie Marketing Digital</h3>
                        <p class="mt-2 text-base ">Augmentez votre trafic, générez des leads qualifiés et fidélisez votre clientèle grâce au SEO et aux publicités en ligne.</p>
                        <a class="flex pt-2 mt-6">
                            <span class="bg-[#FDC416] flex items-center rounded-md gap-2 px-2">
                                <span class="text-md font-semibold  py-1  ">Voir plus</span>
                                <img src="{{asset('assets/img/right-up.png')}}" class="h-5" alt="">
                            </span>
                        </a>
                    </div>
                </div>
                <div class="mt-12 grid gap-10 md:grid-cols-2 lg:grid-cols-2 mx-auto px-4 sm:px-6 lg:px-15">
                    <!-- Service 4: Hébergement & services web -->
                    <div class="text-white bg-[#0B4783] p-8 rounded-lg shadow-sm hover:shadow-xl transition-shadow duration-300 ">
                        <div class="flex items-center justify-center h-15 w-15 rounded-md bg-[#316FB5] text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewB                           ox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z" />
                            </svg>
                        </div>
                        <h3 class="mt-5 text-xl font-semibold  ">Hébergement & services web</h3>
                        <p class="mt-2 text-base ">Assurez à votre site une présence en ligne fiable, rapide et sécurisée. Nous nous occupons de toute la complexité technique, de l'hébergement optimisé à la maintenance proactive.</p>
                        <a class="flex mt-5 pt-2 ">
                            <span class="bg-[#FDC416] flex items-center rounded-md gap-2 px-2">
                                <span class="text-md font-semibold  py-1  ">Voir plus</span>
                                <img src="{{asset('assets/img/right-up.png')}}" class="h-5" alt="">
                            </span>
                            
                        </a>
                    </div>
                    <!-- Service 5: Impression & objets publicitaires -->
                    <div class="bg-[#0B4783] text-white p-8 rounded-lg shadow-sm hover:shadow-xl transition-shadow duration-300">
                        <div class="flex items-center justify-center h-15 w-15 rounded-md bg-[#EC673D] text-white">
                           <!-- Icône Document avec Texte -->
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                            </svg>
                        </div>
                        <h3 class="mt-5 text-xl font-semibold ">Impression & objets publicitaires</h3>
                        <p class="mt-2 text-base ">Transformez votre marque en une expérience tangible. De la carte de visite élégante au textile personnalisé, nous donnons vie à votre identité visuelle sur tous les supports pour marquer les esprits et laisser une impression durable.</p>
                        <a class="flex pt-2 mt-6">
                            <span class="bg-[#FDC416] flex items-center rounded-md gap-2 px-2">
                                <span class="text-md font-semibold  py-1  ">Voir plus</span>
                                <img src="{{asset('assets/img/right-up.png')}}" class="h-5" alt="">
                            </span>
                        </a>
                    </div>
                    
                </div>
            </div>
        </section>

        

        <!-- =========== Section Témoignages =========== -->
        <section class="py-20 bg-white">
            <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <svg class="w-12 h-12 mx-auto text-gray-300" fill="currentColor" viewBox="0 0 32 32" aria-hidden="true">
                    <path d="M9.33 8.37C5.47 11.16 3.5 15.62 3.5 19.5c0 1.93.39 3.75 1.1 5.42.07.16.22.28.38.28.08 0 .16-.03.22-.09.2-.18.23-.48.06-.72C4.58 22.97 4.2 21.3 4.2 19.5c0-3.32 1.62-7.05 4.88-9.5.21-.16.27-.45.12-.66-.15-.21-.45-.27-.66-.12zM21.33 8.37c-3.86 2.79-5.83 7.25-5.83 11.13 0 1.93.39 3.75 1.1 5.42.07.16.22.28.38.28.08 0 .16-.03.22-.09.2-.18.23-.48.06-.72-0.68-1.42-1.06-3.09-1.06-4.89 0-3.32 1.62-7.05 4.88-9.5.21-.16.27-.45.12-.66-.15-.21-.45-.27-.66-.12z" />
                </svg>
                <blockquote class="mt-4">
                    <p class="text-xl md:text-2xl font-medium text-gray-900">
                        "Une équipe incroyablement professionnelle et créative. Ils ont su comprendre nos besoins et livrer un site web qui dépasse nos attentes. Le suivi marketing a déjà des résultats impressionnants !"
                    </p>
                </blockquote>
                <footer class="mt-6">
                    <div class="font-semibold text-gray-900">[Nom du client]</div>
                    <div class="text-gray-600">CEO de [Nom de l'entreprise]</div>
                </footer>
            </div>
        </section>


        <!-- =========== Appel à l'Action Final (CTA) =========== -->
        <section id="contact" class="bg-indigo-700">
            <div class="max-w-4xl mx-auto text-center py-16 px-4 sm:py-20 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
                    <span class="block">Prêt à donner vie à votre projet ?</span>
                </h2>
                <p class="mt-4 text-lg leading-6 text-indigo-200">
                    Discutons ensemble de vos ambitions. Le premier échange est sans engagement.
                </p>
                <a href="mailto:votre.email@exemple.com" class="mt-8 w-full inline-flex items-center justify-center px-8 py-4 border border-transparent rounded-full shadow-sm text-base font-medium text-indigo-600 bg-white hover:bg-indigo-50 sm:w-auto">
                    Obtenir mon devis gratuit
                </a>
            </div>
        </section>
    </main>
@endsection