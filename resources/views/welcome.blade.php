@extends('layaout')
@section('title', ' Acceuil - BrainNova')
@section('content')
    <main>
        <!-- =========== Section Héros =========== -->
        <section id="accueil" class=" h-auto pb-20 w-full px-6 sm:px-6 lg:px-20 mx-auto bg-cover mt-20 bg-center" style="background-image: url('assets/img/bg.png') ">
            <div class="flex flex-col lg:flex-row gap-4 pt-10 w-full">
                <div class="lg:w-1/2 w-full">
                    <h1 class="text-4xl md:text-6xl font-semibold text-white leading-tight">
                    Passer à la vitesse digitale avec <br><span class="bg-clip-text  text-[#EC673D]">Brain Nova🚀</span>
                    </h1>
                    <p class="mt-4 max-w-3xl mx-auto font-light text-md md:text-lg text-white">
                        Des solutions créatives en <span class="font-medium"><strong>Développement Web</strong></span>,<span class="font-medium">  <strong>UI/UX Design</strong></span>, <span class="font-medium"><strong>Design Graphique</strong></span> et <span class="font-medium"><strong>Marketing Digital</strong></span> pour transformer votre présence en ligne et atteindre vos objectifs.
                    </p>
                    <div class="mt-8 flex justify-around ">
                        <a href="#services" class="bg-[#FDC416] group flex gap-2 items-center shadow-sm/80 shadow-white text-white px-3 py-3 rounded-full font-semibold text-md hover:border hover:text-[#FDC416] hover:border-[#FDC416] hover:bg-transparent ">
                            <span>Découvrir nos services</span>
                            <div class="flex items-center  justify-center h-8 w-8 rounded-full bg-white text-[#FDC416] group-hover:text-white group-hover:bg-[#FDC416]">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25" />
                                </svg>
                            </div>
                        </a>
                        <a href="#realisations" class=" text-[#316FB5] shadow-md border-2 border-[#316FB5] flex gap-2 items-center  px-3 py-3 rounded-full font-semibold text-md  hover:text-[#316FB5] hover:bg-white  transition duration-300">
                            <span>Demander un devis</span>
                            <div class="flex items-center  justify-center h-8 w-8 rounded-full bg-[#316FB5] text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25" />
                                </svg>
                            </div>
                        </a>

                    </div>  
                </div>
                <div class="lg:w-1/2 h-auto w-full relative">
                    <img src="{{asset('assets/img/ms bg.png')}}" alt="" >
                    <div class="flex items-center top-8 gap-2 right-12 absolute  text-[#316FB5] bg-white  animate-bounce duration-700 rounded-full py-2 px-2  font-semibold text-md ">
                        <div class="flex items-center  justify-center h-8 w-8 rounded-full bg-[#316FB5] text-white">
                           <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" /></svg>
                        </div>
                        Developpement Web
                    </div>
                    <div class="flex items-center top-50 right-1/2 gap-2 absolute  text-white  bg-[#316FB5] animate-bounce rounded-full py-2 px-2  font-semibold text-md ">
                        <div class="flex items-center  justify-center h-8 w-8 rounded-full bg-white text-[#316FB5]">
                           <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" /></svg>
                        </div>
                        Marketing Digital
                    </div>
                    <div class="flex items-center gap-2 absolute top-115 right-40 text-white  bg-[#316FB5] animate-bounce rounded-full py-2 px-2  font-semibold text-md ">
                        <div class="flex items-center  justify-center h-8 w-8 rounded-full bg-white text-[#316FB5]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" /></svg>
                        </div>
                        Design Graphique
                    </div>
                    <div class="text-md flex items-center gap-2 absolute  top-78 right-8 text-[#316FB5]  bg-white animate-bounce rounded-full py-2 px-2  font-semibold  ">
                        <div class="flex items-center  justify-center h-8 w-8 rounded-full bg-[#316FB5] text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" /></svg>
                        </div>
                        UI/UX Design
                    </div>
                </div>
            </div>
        </section>

        <!-- =========== Section Services =========== -->
        <section id="services" class=" relative isolate py-20">
            
            <div class="absolute inset-0 -z-10">
                <img class="h-full w-full object-cover" 
                    src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2830&q=80&blend=111827&sat=-100&exp=15&blend-mode=multiply" 
                    alt="Espace de travail moderne en arrière-plan">
                
                <!-- Overlay pour assombrir et assurer la lisibilité -->
                <div class="absolute inset-0 bg-black/25"></div>
            </div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-20">
                <div class="mt-8 py-15   border-t border-gray-700 text-center text-base">
                </div>
                <div class="text-center mb-16">
                    <h2 class="text-3xl font-bold tracking-tight text-[#EC673D] sm:text-4xl">Nos Services</h2>
                    <p class="mt-4 max-w-2xl mx-auto text-lg text-gray-200">
                        Votre Partenaire Digital Tout-en-Un.
                    </p>
                </div>
                
                <!-- Grille principale des services -->
                <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                    
                    <!-- Carte Service 1: Développement Web -->
                    <div class="flex flex-col rounded-2xl bg-white/5 shadow-md shadow-[#316FB5] p-8 backdrop-blur-md ring-1 ring-white/10 transition-all duration-300 hover:bg-white/15">
                        <div class="flex items-center justify-center h-12 w-12 rounded-lg bg-[#316FB5] text-white flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" /></svg>
                        </div>
                        <h3 class="mt-5 text-xl font-semibold text-white">Développement Web sur Mesure</h3>
                        <p class="mt-2 text-base text-gray-300 flex-grow">Sites performants, sécurisés et optimisés pour l'expérience utilisateur. Du site vitrine à l'e-commerce.</p>
                        <a href="#" class="mt-6 self-start">
                            <span class="bg-[#FDC416] flex items-center rounded-md gap-2 px-3 py-1.5 text-sm font-semibold text-gray-900 hover:bg-yellow-300 transition-colors">
                                <span>Voir plus</span>
                                <img src="{{asset('assets/img/right-up.png')}}" class="h-4" alt="Icône flèche">
                            </span>
                        </a>
                    </div>

                    <!-- Carte Service 2: Design Graphique -->
                    <div class="flex flex-col rounded-2xl bg-white/5 shadow-md shadow-[#316FB5] p-8 backdrop-blur-md ring-1 ring-white/10 transition-all duration-300 hover:bg-white/15">
                        <div class="flex items-center justify-center h-12 w-12 rounded-lg bg-[#EC673D] text-white flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" /></svg>
                        </div>
                        <h3 class="mt-5 text-xl font-semibold text-white">Design Graphique & Identité Visuelle</h3>
                        <p class="mt-2 text-base text-gray-300 flex-grow">Des identités visuelles percutantes et des supports qui captivent votre audience et racontent votre histoire.</p>
                        <a href="#" class="mt-6 self-start">
                            <span class="bg-[#FDC416] flex items-center rounded-md gap-2 px-3 py-1.5 text-sm font-semibold text-gray-900 hover:bg-yellow-300 transition-colors">
                                <span>Voir plus</span>
                                <img src="{{asset('assets/img/right-up.png')}}" class="h-4" alt="Icône flèche">
                            </span>
                        </a>
                    </div>
                    
                    <!-- Carte Service 3: Marketing Digital -->
                    <div class="flex flex-col rounded-2xl bg-white/5 shadow-md shadow-[#316FB5] p-8 backdrop-blur-md ring-1 ring-white/10 transition-all duration-300 hover:bg-white/15">
                        <div class="flex items-center justify-center h-12 w-12 rounded-lg bg-[#FDC416] text-white flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" /></svg>
                        </div>
                        <h3 class="mt-5 text-xl font-semibold text-white">Stratégie Marketing Digital</h3>
                        <p class="mt-2 text-base text-gray-300 flex-grow">Augmentez votre trafic, générez des leads qualifiés et fidélisez votre clientèle grâce au SEO et aux publicités en ligne.</p>
                        <a href="#" class="mt-6 self-start">
                            <span class="bg-[#FDC416] flex items-center rounded-md gap-2 px-3 py-1.5 text-sm font-semibold text-gray-900 hover:bg-yellow-300 transition-colors">
                                <span>Voir plus</span>
                                <img src="{{asset('assets/img/right-up.png')}}" class="h-4" alt="Icône flèche">
                            </span>
                        </a>
                    </div>

                    <!-- Carte Service 4: Hébergement & services web -->
                    <div class="flex flex-col rounded-2xl bg-white/5 shadow-md shadow-[#316FB5] p-8 backdrop-blur-md ring-1 ring-white/10 transition-all duration-300 hover:bg-white/15">
                        <div class="flex items-center justify-center h-12 w-12 rounded-lg bg-gray-800 text-white flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z" /></svg>
                        </div>
                        <h3 class="mt-5 text-xl font-semibold text-white">Hébergement & services web</h3>
                        <p class="mt-2 text-base text-gray-300 flex-grow">Assurez à votre site une présence en ligne fiable, rapide et sécurisée. Nous nous occupons de toute la complexité technique.</p>
                        <a href="#" class="mt-6 self-start">
                            <span class="bg-[#FDC416] flex items-center rounded-md gap-2 px-3 py-1.5 text-sm font-semibold text-gray-900 hover:bg-yellow-300 transition-colors">
                                <span>Voir plus</span>
                                <img src="{{asset('assets/img/right-up.png')}}" class="h-4" alt="Icône flèche">
                            </span>
                        </a>
                    </div>
                    
                    <!-- Carte Service 5: Impression & objets publicitaires -->
                    <div class="flex flex-col rounded-2xl bg-white/5 shadow-md shadow-[#316FB5] p-8 backdrop-blur-md ring-1 ring-white/10 transition-all duration-300 hover:bg-white/15 lg:col-span-2">
                        <div class="flex items-center justify-center h-12 w-12 rounded-lg bg-gray-500 text-white flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12m10.5-11.25h.008v.008h-.008V8.25zm0 3.75h.008v.008h-.008v-.008zm0 3.75h.008v.008h-.008v-.008zM10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" /></svg>
                        </div>
                        <h3 class="mt-5 text-xl font-semibold text-white">Impression & objets publicitaires</h3>
                        <p class="mt-2 text-base text-gray-300 flex-grow">Transformez votre marque en une expérience tangible avec des supports qui marquent les esprits et laissent une impression durable.</p>
                        <a href="#" class="mt-6 self-start">
                            <span class="bg-[#FDC416] flex items-center rounded-md gap-2 px-3 py-1.5 text-sm font-semibold text-gray-900 hover:bg-yellow-300 transition-colors">
                                <span>Voir plus</span>
                                <img src="{{asset('assets/img/right-up.png')}}" class="h-4" alt="Icône flèche">
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- ======================= Section Nos Réalisations avec Carrousel ======================= -->
        <section id="realisations" class="bg-gray-900 py-10 lg:pb-20 lg:pt-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-20">
                
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold tracking-tight text-[#EC673D] sm:text-4xl">Nos Réalisations</h2>
                    <p class="mt-4 max-w-2xl mx-auto text-lg text-white">
                        Découvrez quelques-uns des projets qui illustrent notre passion et notre expertise.
                    </p>
                </div>

                <!-- Structure du Carrousel Swiper -->
                <div class="swiper realisations-carousel relative">
                    <div class="swiper-wrapper">
                        
                        <!-- Slide 1 -->
                        <div class="swiper-slide p-2">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-12 items-center">
                                <div>
                                    <img src="{{asset('assets/img/tn const.jpg')}}" alt="Image du projet La Belle Plante" class="rounded-lg shadow-xl w-full h-auto object-cover">
                                </div>
                                <div class="flex flex-col justify-center text-center md:text-left md:order-first">
                                    <h3 class="text-2xl lg:text-3xl font-bold text-white">Développement web : site internet de l'entreprise TN Construction</h3>
                                    <p class="mt-4 text-white text-base lg:text-lg">
                                        Nous avons entièrement repensé l'expérience utilisateur et l'interface du site e-commerce pour augmenter les conversions. La nouvelle plateforme, développée sur mesure, est plus rapide, plus intuitive et optimisée pour le SEO.
                                    </p>
                                </div>
                                
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="swiper-slide p-2">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-12 items-center">
                                <div>
                                    <img src="{{asset('assets/img/mobile de supermar.jpg')}}" alt="Image du projet Innovatech" class="rounded-lg shadow-xl w-full h-auto object-cover">
                                </div>
                                <div class="flex flex-col justify-center text-center md:text-left md:order-first">
                                    <h3 class="text-2xl lg:text-3xl font-bold text-white">Ui/ux design : design d'une application mobile de supermarché alimentaire</h3>
                                    <p class="mt-4 text-white text-base lg:text-lg">
                                        Food Product est une application mobile innovante de commerce alimentaire, conçue 
                                        pour offrir une expérience d'achat fluide et personnalisée. Cette plateforme permet 
                                        aux utilisateurs de découvrir et commander une large gamme de produits alimentaires frais et de qualité, avec la possibilité
                                         de personnaliser leurs préférences et de suivre leurs commandes en temps réel.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 3 -->
                        <div class="swiper-slide p-2">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-12 items-center">
                                
                                <div>
                                <img src="{{asset('assets/img/Visuels publicitaires.jpg')}}" alt="Image du projet Gourmet Local" class="rounded-lg shadow-xl w-full h-auto object-cover">
                                </div>

                                <div class="flex flex-col justify-center text-center md:text-left md:order-first">
                                    <h3 class="text-2xl lg:text-3xl font-bold text-white">Campagne Marketing "Gourmet Local"</h3>
                                    <p class="mt-4 text-white text-base lg:text-lg">
                                        Collection de flyers créatifs conçus pour divers événements et entreprises. Chaque flyer est pensé pour captiver l'attention et transmettre efficacement le message clé, avec un design moderne et impactant.
                                    </p>
                                </div>
                                
                            </div>
                        </div>

                        <!-- Slide 4-->
                        <div class="swiper-slide p-2">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-12 items-center">
                                
                                <div>
                                <img src="{{asset('assets/img/carte visite.jpg')}}" alt="Image du projet Gourmet Local" class="rounded-lg shadow-xl w-full h-auto object-cover">
                                </div>

                                <div class="flex flex-col justify-center text-center md:text-left md:order-first">
                                    <h3 class="text-2xl lg:text-3xl font-bold text-white">Logo + carte de visite TN CONSTRUCTION"</h3>
                                    <p class="mt-4 text-white text-base lg:text-lg">
                                        designs graphiques comprenant des cartes de visite professionnelles et des supports marketing variés. Chaque création est méticuleusement conçue pour refléter l'identité unique de chaque client tout en assurant une communication visuelle efficace et mémorable.
                                    </p>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <!-- Pagination (les points en bas) -->
                    <div class="swiper-pagination mt-5 relative"></div>
                </div>
            </div>
        </section>

        <!-- ======================= Section Témoignages ======================= -->
        <section class="relative isolate bg-gray-900  py-10 sm:py-10">

            <!-- Image de fond et overlay -->
            <div class="absolute inset-0 -z-10">
                <img class="h-full w-full object-cover" 
                    src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2830&q=80&blend=111827&sat=-100&exp=15&blend-mode=multiply" 
                    alt="Environnement de travail professionnel en arrière-plan">
                
                <!-- Overlay pour assombrir et assurer la lisibilité -->
                <div class="absolute inset-0 bg-black/35"></div>
            </div>

            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

                        <div class="text-center pt-15 mb-15">
                            <h2 class="text-3xl font-bold tracking-tight text-[#EC673D] sm:text-4xl">Ce que disent nos clients</h2>
                            <p class="mt-4 max-w-2xl mx-auto text-lg text-white">
                                La confiance est au cœur de chaque projet. Voici ce que certains de nos partenaires pensent de notre collaboration.
                            </p>
                        </div>

                        <!-- Structure du Carrousel de Témoignages -->
                        <div class="swiper testimonials-carousel-single  overflow-hidden">
                            <div class="swiper-wrapper">

                                <!-- Témoignage 1 -->
                                <div class="swiper-slide">
                                    <!-- Conteneur pour centrer la carte -->
                                    <div class="mx-auto max-w-3xl">
                                        <figure class="flex flex-col shadow-[#0B4783] border-1 border-[#0B4783] shadow-md rounded-2xl  p-8 md:p-8 text-center">
                                            <img class="h-25 w-auto mx-auto object-contain mb-5" src="{{asset('assets/img/Logo entreprise VFT.png')}}" alt="Logo de l'entreprise cliente 1">
                                            
                                            <blockquote class="flex-grow">
                                                <p class="text-lg  leading-relaxed text-white italic">
                                                    "Brainnova a grandement contribué à notre visibilité à travers des visuels publicitaires percutants et des campagnes Facebook efficaces. Leur professionnalisme, le respect des délais et la qualité du travail sont irréprochables. Nous recommandons vivement leurs services."
                                                </p>
                                            </blockquote>

                                            <figcaption class="mt-5">
                                                <div class="font-semibold text-lg text-[#EC673D]">Mr Roger Ongono</div>
                                                <div class="text-base text-white/70">Promoteur, Entreprise VFT – Douala</div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>

                                <!-- Témoignage 2 -->
                                <div class="swiper-slide">
                                    <!-- Conteneur pour centrer la carte -->
                                    <div class="mx-auto max-w-3xl">
                                        <figure class="flex flex-col shadow-[#0B4783] border-1 border-[#0B4783] shadow-md rounded-2xl  p-8 md:p-12 text-center">
                                            <img class="h-20 w-auto mx-auto object-contain mb-5" src="{{asset('assets/img/logo TIKEU GROUP.jpg')}}" alt="Logo de l'entreprise cliente 2">
                                            
                                            <blockquote class="flex-grow">
                                                <p class="text-lg  leading-relaxed text-white italic">
                                                    " Nous faisons régulièrement appel à Brainnova pour la création de visuels, flyers et cartes personnalisées pour nos événements. La qualité d’impression, la créativité graphique et le respect des délais sont toujours au rendez-vous. Un partenaire de confiance qui valorise chacun de nos projets"
                                                </p>
                                            </blockquote>
                                            
                                            <figcaption class="mt-5">
                                                <div class="font-semibold text-lg text-[#EC673D]">M. TIKEU Gildas Peguy</div>
                                                <div class="text-base text-white/70">Promoteur, TIKEU GROUP – Douala</div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>

                                <!-- Témoignage 3 -->
                                <div class="swiper-slide">
                                    <!-- Conteneur pour centrer la carte -->
                                    <div class="mx-auto max-w-3xl">
                                        <figure class="flex flex-col shadow-[#0B4783] border-1 border-[#0B4783] shadow-md rounded-2xl  p-8 md:p-12 text-center">
                                            <img class="h-20 w-auto mx-auto object-contain mb-5" src="{{asset('assets/img/logo entreprise tnconstruction.png')}}" alt="Logo de l'entreprise cliente 3">
                                            
                                            <blockquote class="flex-grow">
                                                <p class="text-lg leading-relaxed text-white italic">
                                                    "Grâce à Brainnova, notre entreprise bénéficie désormais d’un site internet moderne, fluide et professionnel. Leur accompagnement en communication visuelle et la gestion efficace de nos pages Facebook ont considérablement renforcé notre image de marque. Une équipe sérieuse, créative et orientée résultats."
                                                </p>
                                            </blockquote>
                                            
                                            <figcaption class="mt-5">
                                                <div class="font-semibold text-lg text-[#EC673D]">M. NKAMENI TIENTCHEU</div>
                                                <div class="text-base text-white/70">Promoteur, TN Construction – Douala</div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>

                            </div>
                            
                            <div class="swiper-button-prev-single -left-2 md:-left-6 w-12 h-12 text-white/80 hover:text-gray-900 transition"></div>
                            <div class="swiper-button-next-single -right-2 md:-right-6 w-12 h-12 text-white/80 hover:text-white transition"></div>
                            
                    
                        </div>
                        <div class="swiper-pagination-single text-center"></div>
                    </div>
        </section>
    </main>
@endsection





