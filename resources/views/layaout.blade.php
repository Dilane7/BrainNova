<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', config('app.name', 'BrainNova'))</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Alternative pour les icônes Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="icon" type="image/png"  href="{{asset("assets/img/favicon-96x96.png")}}" sizes="96x96" />
    <link rel="icon" type="image/svg+xml"  href="{{asset("assets/img/favicon.svg")}}" />
    <link rel="shortcut icon"  href="{{asset("assets/img/favicon.ico")}}" />
    <link rel="apple-touch-icon" sizes="180x180"  href="{{asset("assets/img/apple-touch-icon.png")}}" />
    <meta name="apple-mobile-web-app-title" content="MyWebSite" />
    <link rel="manifest"  href="{{asset("assets/img/site.webmanifest")}}" />
</head>
<body>
     <!-- =========== Barre de Navigation =========== -->
    <nav class="bg-[#000F21] backdrop-blur-md shadow-sm fixed w-full top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-20">
            <div class="flex items-center justify-between h-20">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="{{ route('home') }}"><img src="{{asset('assets/img/logo2.png')}} " class="h-18 my-1" alt=""></a>
                </div>
                <!-- Liens de navigation (Desktop) -->
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-8">
                        <!-- Lien Accueil -->
                        <div class="relative group">
                            <a class="transition-colors  duration-300 font-semibold py-2 {{ request()->routeIs('home') ? 'text-[#EC673D]  font-semibold' : 'text-[#4A7DC7] hover:text-[#EC673D]' }}" 
                            href="{{ route('home') }}">
                                Accueil
                            </a>
                            <span class="absolute -bottom-2 left-0 h-[3px] w-full bg-[#EC673D] transform transition-transform duration-300 ease-out 
                                        {{ request()->routeIs('home') ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100' }}">
                            </span>
                        </div>

                        <!-- Lien Services -->
                        <div class="relative group">
                            <a class="transition-colors duration-300 font-semibold py-2 {{ request()->routeIs('services') ? 'text-[#EC673D] font-semibold' : 'text-[#4A7DC7] hover:text-[#EC673D]' }}" 
                            href="{{ route('services') }}">
                                Services
                            </a>
                            <span class="absolute -bottom-2 left-0 h-[3px] w-full bg-[#EC673D] transform transition-transform duration-300 ease-out 
                                        {{ request()->routeIs('services') ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100' }}">
                            </span>
                        </div>

                        <!-- Lien Réalisations -->
                        <div class="relative group">
                            <a class="transition-colors duration-300 font-semibold py-2 {{ request()->routeIs('apropos') ? 'text-[#EC673D] font-semibold' : 'text-[#4A7DC7] hover:text-[#EC673D]' }}" 
                            href="{{ route('apropos') }}">
                                A Propos
                            </a>
                            <span class="absolute -bottom-2 left-0 h-[3px] w-full bg-[#EC673D] transform transition-transform duration-300 ease-out 
                                        {{ request()->routeIs('apropos') ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100' }}">
                            </span>
                        </div>

                        <!-- Lien Contact -->
                        <div class="relative group">
                            <a class="transition-colors duration-300 font-semibold py-2 {{ request()->routeIs('contact') ? 'text-[#EC673D] font-semibold' : 'text-[#4A7DC7] hover:text-[#EC673D]' }}" 
                            href="{{ route('contact') }}">
                                Contact
                            </a>
                            <span class="absolute -bottom-2 left-0 h-[3px] w-full bg-[#EC673D] transform transition-transform duration-300 ease-out 
                                        {{ request()->routeIs('contact') ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100' }}">
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Bouton CTA (Desktop) -->
                <div class="hidden md:block">
                    <div class="flex items-center space-x-2 bg-[#316FB5] text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-white hover:text-[#316FB5] hover:border hover:border-[#316FB5] transition duration-300">
                        <a href="{{ asset('assets/pdf/Plaquette commerciale numerique Brain Nova.pdf') }}" download="Profil_Brain_Nova.pdf" class="">Télécharger le profil </a>
                        <svg class="text-white w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                        </svg>
                    </div>
                </div>
                <!-- Menu Burger (Mobile) -->
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="text-gray-600 hover:text-[#316FB5] focus:outline-none">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- 2. Menu mobile, initialement caché -->
        <div id="mobile-menu" class="hidden md:hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="{{ route('home') }}" class="block text-[#316FB5] hover:bg-gray-100 hover:text-[#316FB5] px-3 py-2 rounded-md text-base font-medium">Accueil</a>
                <a href="{{ route('services') }}" class="block text-[#316FB5] hover:bg-gray-100 hover:text-[#316FB5] px-3 py-2 rounded-md text-base font-medium">Services</a>
                <a href="{{ route('apropos') }}" class="block text-[#316FB5] hover:bg-gray-100 hover:text-[#316FB5] px-3 py-2 rounded-md text-base font-medium">A Propos</a>
                <a href="{{ route('contact') }}" class="block text-[#316FB5] hover:bg-gray-100 hover:text-[#316FB5] px-3 py-2 rounded-md text-base font-medium">Contact</a>
                <a href="{{ asset('assets/pdf/Plaquette commerciale numerique Brain Nova.pdf') }}" download="Profil_Brain_Nova.pdf" class="block bg-[#316FB5] text-white mt-2 mx-2 px-3 py-2 rounded-md text-base font-medium text-center">Télécharger le profil</a>
            </div>
        </div>
    </nav>


    <div>
        @yield('content')
    </div>



    <!-- =========== Pied de Page (Footer) =========== -->
    <footer class="bg-gray-900 text-gray-400">
        <div class="max-w-7xl mx-auto py-12 px-6 sm:px-6 lg:px-20">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <!-- Colonne 1: Logo & Social -->
                <div class="col-span-2 md:col-span-1">
                    <a href="#" class="text-2xl font-bold text-white"><img src="{{asset('assets/img/logo2.png')}} " class="h-18" alt=""></a>
                    <p class="mt-2 text-sm">Votre partenaire pour une transformation digitale réussie.</p>
                    <div class="mt-4 flex space-x-4">
                        <a href="https://LinkedIn.com/company/brain-nova" class="text-gray-400 hover:text-white"><i class="fab fa-linkedin fa-lg"></i></a>
                        <a href="https://www.facebook.com/share/162ZZVuD6m/" class="text-gray-400 hover:text-white"><i class="fab fa-facebook fa-lg"></i></a>
                    </div>
                </div>
                <!-- Colonne 2: Services -->
                <div>
                    <h3 class="text-sm font-semibold tracking-wider text-gray-200 uppercase">Services</h3>
                    <ul class="mt-4 space-y-2">
                        <li><a href="{{ route('services') }}" class="hover:text-white">Développement Web</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-white">UI/UX & Design Visuel</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-white">Marketing Digital</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-white">Hébergement & Services Web</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-white">Impression & Objets Publicitaires</a></li>
                    </ul>
                </div>
                <!-- Colonne 3: Navigation -->
                <div>
                    <h3 class="text-sm font-semibold tracking-wider text-gray-200 uppercase">Navigation</h3>
                    <ul class="mt-4 space-y-2">
                        <li><a href="{{ route('home') }}" class="hover:text-white">Accueil</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-white">Services</a></li>
                        <li><a href="{{ route('apropos') }}" class="hover:text-white">À Propos</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-white">Contact</a></li>
                    </ul>
                </div>
                <!-- Colonne 4: Contact -->
                 <div>
                    <h3 class="text-sm font-semibold tracking-wider text-gray-200 uppercase">Contact</h3>
                    <ul class="mt-4 space-y-2">
                        <li><a href="mailto:contact@brainnovatech.com" class="hover:text-white">contact@brainnovatech.com</a></li>
                        <li class="hover:text-white">+237 6 56 58 54 44 / 673 02 65 95</li>
                        <li><p>Douala, cameroun</p></li>
                    </ul>
                </div>
            </div>
            <div class="mt-8 pt-8 border-t border-gray-700 text-center text-base">
                <p>© 2025 Brain Nova. Tous droits réservés.</p>
            </div>
        </div>
    </footer>


   <script src="{{asset('assets/js/app.js')}}"></script>
   <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
   <script src="{{asset('assets/js/carr.js')}}"></script> 


</body>
</html>
