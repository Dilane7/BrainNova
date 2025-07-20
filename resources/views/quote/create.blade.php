@extends('layaout')
@section('title', ' Devis - BrainNova')
@section('content')

    <section  class=" h-auto text-center py-12 w-full px-6 sm:px-6 lg:px-20 mx-auto bg-cover mt-20 bg-center" style="background-image: url('assets/img/bg.png') ">>
        <div class="mx-auto max-w-4xl py-15 text-center">
            <h1 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">
                Parlons de votre  <span class="text-[#EC673D]">projet</span>
            </h1>
            <p class="mt-6 text-lg leading-8 text-white/90">
                Une idée, une question, ou un projet à nous soumettre ? Nous sommes à votre écoute. Remplissez le formulaire ou contactez-nous directement. Nous nous engageons à vous répondre dans les plus brefs délais.
            </p>
        </div>
    </section>
    <section class="relative isolate py-20 sm:py-24">
        <!-- Image de fond et overlay -->
            <div class="absolute inset-0 -z-10">
                <img class="h-full w-full object-cover" 
                    src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2830&q=80&blend=111827&sat=-100&exp=15&blend-mode=multiply" 
                    alt="Espace de travail moderne et collaboratif en arrière-plan">
                
                <!-- Overlay pour assombrir et assurer la lisibilité -->
                <div class="absolute inset-0 bg-black/65"></div>
            </div>

        <div class="max-w-4xl mx-auto p-6 sm:p-8 shadow-md  rounded-2xl shadow-[#316FB5] border-1 border-[#316FB5] ">
            {{-- Titre et description --}}
            <div class="text-center">
                <h1 class="text-3xl font-bold text-[#EC673D]">Demander un devis détaillé</h1>
                <p class="text-white mt-2">Remplissez ce formulaire pour nous aider à comprendre votre projet. Un membre de notre équipe vous recontactera rapidement.</p>
            </div>

            {{-- Affichage des messages de session (succès, erreur) --}}
            @if (session('success'))
                <div class="mt-6 p-4 bg-green-100 text-green-800 rounded-md shadow-sm">{{ session('success') }}</div>
            @endif

            @if ($errors->any())
                <div class="mt-6 p-4 bg-red-100 text-red-800 rounded-md shadow-sm">
                    <strong class="font-bold">Oups !</strong> Il y a des erreurs dans votre formulaire. Veuillez vérifier les champs en rouge.
                </div>
            @endif

            <form action="" method="POST" enctype="multipart/form-data" class="mt-8 space-y-10">
                @csrf

                <!-- ================= SECTION 1: INFORMATIONS PERSONNELLES/ENTREPRISE ================= -->
                <fieldset>
                    <legend class="text-xl font-semibold text-[#EC673D] border-b-2 border-[#EC673D] pb-2 w-full">1. Vos Informations</legend>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                        
                        {{-- Prénom --}}
                        <div>
                            <label for="first_name" class="block text-md font-medium text-white">Prénom <span class="text-[#EC673D]">*</span></label>
                            <input type="text" name="first_name" id="first_name" required value="{{ old('first_name') }}" class="mt-2 block w-full rounded-md px-3 py-2 text-white border-1  focus:ring-2 focus:ring-inset  shadow-sm focus:border-[#EC673D] focus:ring-[#EC673D]">
                        </div>

                        {{-- Nom --}}
                        <div>
                            <label for="last_name" class="block text-md font-medium text-white">Nom <span class="text-[#EC673D]">*</span></label>
                            <input type="text" name="last_name" id="last_name" required value="{{ old('last_name') }}" class="mt-2 block w-full rounded-md border-1 px-3 py-2 text-white shadow-sm focus:ring-2 focus:ring-inset  focus:border-[#EC673D] focus:ring-[#EC673D]">
                        </div>

                        {{-- Nom de l'entreprise --}}
                        <div>
                            <label for="company_name" class="block text-md font-medium text-white">Nom de l'entreprise (<span class="text-[#EC673D]">Optionnel</span>)</label>
                            <input type="text" name="company_name" id="company_name" value="{{ old('company_name') }}" class="mt-2 block w-full rounded-md border-1 px-3 py-2 text-white shadow-sm focus:ring-2 focus:ring-inset  focus:border-[#EC673D] focus:ring-[#EC673D]">
                        </div>

                        {{-- Fonction --}}
                        <div>
                            <label for="function" class="block text-md font-medium text-white">Votre fonction (<span class="text-[#EC673D]">Optionnel</span>)</label>
                            <input type="text" name="function" id="function" value="{{ old('function') }}" class="mt-2 block w-full rounded-md border-1 px-3 py-2 text-white shadow-sm focus:ring-2 focus:ring-inset  focus:border-[#EC673D] focus:ring-[#EC673D]">
                        </div>

                        {{-- Secteur d'activité --}}
                        <div>
                            <label for="industry" class="block text-md font-medium text-white">Secteur d'activité <span class="text-[#EC673D]">*</span></label>
                            <select name="industry" id="industry" required class="mt-2 block w-full rounded-md border-1 px-3 py-2 text-white shadow-sm focus:border-[#EC673D]  focus:ring-[#EC673D]">
                                <option class="text-black" value="" disabled selected>Sélectionnez un secteur</option>
                                <option class="text-black" value="technologie_it" {{ old('industry') == 'technologie_it' ? 'selected' : '' }}>Technologie / IT</option>
                                <option class="text-black" value="sante_bien_etre" {{ old('industry') == 'sante_bien_etre' ? 'selected' : '' }}>Santé & Bien-être</option>
                                <option class="text-black" value="e-commerce_retail" {{ old('industry') == 'e-commerce_retail' ? 'selected' : '' }}>E-commerce & Retail</option>
                                <option class="text-black" value="restauration_hotellerie" {{ old('industry') == 'restauration_hotellerie' ? 'selected' : '' }}>Restauration & Hôtellerie</option>
                                <option class="text-black" value="education" {{ old('industry') == 'education' ? 'selected' : '' }}>Éducation</option>
                                <option class="text-black" value="immobilier_btp" {{ old('industry') == 'immobilier_btp' ? 'selected' : '' }}>Immobilier & BTP</option>
                                <option class="text-black" value="autre" {{ old('industry') == 'autre' ? 'selected' : '' }}>Autre (veuillez préciser dans la description)</option>
                            </select>
                        </div>

                        {{-- Taille de l'entreprise --}}
                        <div>
                            <label for="company_size" class="block text-md font-medium text-white">Taille de l'entreprise <span class="text-[#EC673D]">*</span></label>
                            <select name="company_size" id="company_size" required class="mt-2 block w-full rounded-md border-1 px-3 py-2 text-white shadow-sm focus:border-[#EC673D]   focus:ring-[#EC673D]">
                                <option class="text-black" value="" disabled selected>Sélectionnez une taille</option>
                                <option class="text-black" value="micro_entreprise" {{ old('company_size') == 'micro_entreprise' ? 'selected' : '' }}>Micro-entreprise (1-9 employés)</option>
                                <option class="text-black" value="pme" {{ old('company_size') == 'pme' ? 'selected' : '' }}>PME (10-49 employés)</option>
                                <option class="text-black" value="startup" {{ old('company_size') == 'startup' ? 'selected' : '' }}>Startup</option>
                                <option class="text-black" value="grande_entreprise" {{ old('company_size') == 'grande_entreprise' ? 'selected' : '' }}>Grande entreprise (50+ employés)</option>
                                <option class="text-black" value="association_ong" {{ old('company_size') == 'association_ong' ? 'selected' : '' }}>Association / ONG</option>
                            </select>
                        </div>

                        {{-- Ville --}}
                        <div>
                            <label for="city" class="block text-md font-medium text-white">Ville <span class="text-[#EC673D]">*</span></label>
                            <input type="text" name="city" id="city" required value="{{ old('city') }}" class="mt-2 block w-full rounded-md border-1 py-2 px-3 shadow-sm text-white focus:ring-2 focus:ring-inset  focus:border-[#EC673D] focus:ring-[#EC673D]">
                        </div>

                        {{-- Pays --}}
                        <div>
                            <label for="country" class="block text-md font-medium text-white">Pays <span class="text-[#EC673D]">*</span></label>
                            <input type="text" name="country" id="country" required value="{{ old('country') }}" class="mt-2 block w-full rounded-md border-1 py-2 px-3 text-white shadow-sm focus:ring-2 focus:ring-inset  focus:border-[#EC673D] focus:ring-[#EC673D]">
                        </div>

                        {{-- Email --}}
                        <div >
                            <label for="email" class="block text-md font-medium text-white">Email professionnel <span class="text-[#EC673D]">*</span></label>
                            <input type="email" name="email" id="email" required value="{{ old('email') }}" class="mt-2 block w-full rounded-md  border-1 py-2 px-3 text-white shadow-sm focus:ring-2 focus:ring-inset  focus:border-[#EC673D] focus:ring-[#EC673D]">
                        </div>
                        
                        {{-- Téléphone --}}
                        <div >
                            <label for="phone" class="block text-md font-medium text-white">Numéro de téléphone ( <span class="text-[#EC673D]">WhatsApp</span> ) <span class="text-[#EC673D]">*</span></label>
                            <input type="tel" name="phone" id="phone" required value="{{ old('phone') }}" placeholder="+XXX X XX XX XX XX" class="mt-2 block w-full rounded-md border-1 px-3 py-2 text-white shadow-sm focus:ring-2 focus:ring-inset  focus:border-[#EC673D] focus:ring-[#EC673D]">
                        </div>
                    </div>
                </fieldset>

                <!-- ================= SECTION 2: INFORMATIONS SUR LE PROJET ================= -->
                <fieldset>
                    <legend class="text-xl font-semibold text-[#EC673D] border-b-2 border-[#EC673D] pb-2 w-full">2. Votre Projet</legend>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-8 mt-6">
                        
                        {{-- Services recherchés --}}
                        <div class="md:col-span-2">
                            <label class="block text-md font-medium text-white">Quels services recherchez-vous ? <span class="text-[#EC673D]">*</span> ( <span class="text-[#EC673D]" >Cochez tout ce qui s'applique</span> )</label>
                            <div class="mt-2 grid grid-cols-2 sm:grid-cols-3 gap-4">
                                <label class="flex items-center text-white" ><input type="checkbox" name="services[]" value="developpement_web" class="h-4 w-4 rounded border-1 text-[#EC673D] focus:ring-[#EC673D]"> <span class="ml-2">Développement Web</span></label>
                                <label class="flex items-center text-white"><input type="checkbox" name="services[]" value="ui_ux_design" class="h-4 w-4 rounded border-gray-300 text-[#EC673D] focus:ring-[#EC673D]"> <span class="ml-2">UI/UX Design</span></label>
                                <label class="flex items-center text-white"><input type="checkbox" name="services[]" value="design_graphique" class="h-4 w-4 rounded border-gray-300 text-[#EC673D] focus:ring-[#EC673D]"> <span class="ml-2">Design Graphique</span></label>
                                <label class="flex items-center text-white"><input type="checkbox" name="services[]" value="marketing_digital" class="h-4 w-4 rounded border-gray-300 text-[#EC673D] focus:ring-[#EC673D]"> <span class="ml-2">Marketing Digital</span></label>
                                <label class="flex items-center text-white"><input type="checkbox" name="services[]" value="impression_objets_pub" class="h-4 w-4 rounded border-gray-300 text-[#EC673D] focus:ring-[#EC673D]"> <span class="ml-2">Impression & Objets Pub</span></label>
                                <label class="flex items-center text-white"><input type="checkbox" name="services[]" value="autre" class="h-4 w-4 rounded border-gray-300 text-[#EC673D] focus:ring-[#EC673D]"> <span class="ml-2">Autre</span></label>
                            </div>
                        </div>

                        {{-- Objectif principal --}}
                        <div class="md:col-span-2">
                            <label for="project_goal" class="block text-md font-medium text-white">Objectif principal du projet <span class="text-[#EC673D]">*</span></label>
                            <input type="text" name="project_goal" id="project_goal" required value="{{ old('project_goal') }}" placeholder="Ex: Augmenter mes ventes en ligne, trouver de nouveaux clients, améliorer mon image de marque..." class="mt-2 block w-full rounded-md border-1 text-white py-2 px-3 shadow-sm focus:ring-2 focus:ring-inset  focus:border-[#EC673D] focus:ring-[#EC673D]">
                        </div>

                        {{-- Budget estimé --}}
                        <div>
                            <label for="budget" class="block text-md font-medium text-white">Budget estimé ( <span class="text-[#EC673D]">Optionnel</span> )</label>
                            <input type="text" name="budget" id="budget" value="{{ old('budget') }}" placeholder="Ex: 200 000 FCFA, 200 000 - 500 000 FCFA" class="mt-2 block w-full rounded-md border-1 text-white  py-2 px-3 shadow-sm focus:ring-2 focus:ring-inset  focus:ring-[#EC673D]">
                        </div>

                        {{-- Délai souhaité --}}
                        <div>
                            <label for="start_delay" class="block text-md font-medium text-white">Délai souhaité pour le démarrage <span class="text-[#EC673D]">*</span></label>
                            <select name="start_delay" id="start_delay" required class="mt-2 block w-full rounded-md border-1 text-white py-2 px-3 shadow-sm focus:border-[#EC673D]   focus:ring-[#EC673D]">
                                <option value="" disabled selected>Sélectionnez un délai</option>
                                <option class="text-black" value="immediat" {{ old('start_delay') == 'immediat' ? 'selected' : '' }}>Immédiat</option>
                                <option class="text-black" value="moins_1_mois" {{ old('start_delay') == 'moins_1_mois' ? 'selected' : '' }}>Moins d'un mois</option>
                                <option class="text-black" value="1_a_3_mois" {{ old('start_delay') == '1_a_3_mois' ? 'selected' : '' }}>Entre 1 et 3 mois</option>
                                <option class="text-black" value="plus_3_mois" {{ old('start_delay') == 'plus_3_mois' ? 'selected' : '' }}>Plus de 3 mois</option>
                            </select>
                        </div>

                        {{-- Description détaillée --}}
                        <div class="md:col-span-2">
                            <label for="description" class="block text-md font-medium text-white">Description détaillée de votre besoin <span class="text-[#EC673D]">*</span></label>
                            <textarea name="description" id="description" rows="6" required class="mt-2 block w-full rounded-md border-1 text-white py-2 px-3 shadow-sm focus:border-[#EC673D] focus:ring-2 focus:ring-inset  focus:ring-[#EC673D]">{{ old('description') }}</textarea>
                        </div>
                        
                        {{-- Joindre un fichier --}}
                        <div class="md:col-span-2">
                            <label for="file" class="block text-md font-medium text-white">Joindre un cahier des charges (<span class="text-[#EC673D]">Optionnel, </span>10Mo max)</label>
                            <input type="file" name="file" id="file" class="mt-2 block w-full text-sm text-[#EC673D] file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-gray-100 file:text-gray-700 hover:file:bg-gray-200">
                        </div>

                        {{-- Déjà travaillé avec agence/freelance ? --}}
                        <div class="md:col-span-2">
                            <label class="block text-md font-medium text-white">Avez-vous déjà travaillé avec une agence/freelance ? <span class="text-[#EC673D]">*</span></label>
                            <div class="mt-2 flex items-center space-x-6">
                                <label class="flex items-center"><input type="radio" name="has_worked_with_agency" value="1" required class="h-4 w-4 text-[#EC673D] focus:ring-[#EC673D]"> <span class="ml-2 text-white">Oui</span></label>
                                <label class="flex items-center"><input type="radio" name="has_worked_with_agency" value="0" required class="h-4 w-4 text-[#EC673D] focus:ring-[#EC673D]"> <span class="ml-2 text-white">Non</span></label>
                            </div>
                        </div>
                        
                        {{-- Préférence de RDV --}}
                        <div class="md:col-span-2">
                            <label for="meeting_preference" class="block text-md font-medium text-white">Souhaitez-vous un RDV ? Si oui, précisez votre préférence (<span class="text-[#EC673D]">Optionnel</span>)</label>
                            <input type="text" name="meeting_preference" id="meeting_preference" value="{{ old('meeting_preference') }}" placeholder="Ex: Visioconférence la semaine prochaine, appel téléphonique demain après-midi..." class="mt-2 block w-full rounded-md border-1 text-white py-2 px-3 shadow-sm focus:ring-2 focus:ring-inset  focus:border-[#EC673D] focus:ring-[#EC673D]">
                        </div>
                    </div>
                </fieldset>

                <!-- ================= SECTION 3: CONSENTEMENT ================= -->
                <fieldset>
                    <legend class="text-xl font-semibold text-[#EC673D]  border-b-2 border-[#EC673D] pb-2 w-full">3. Consentement</legend>
                    <div class="space-y-5 mt-6">
                        <label class="flex items-start">
                            <input type="checkbox" name="accepts_offers" value="1" required class="h-4 w-4 rounded border-gray-300 text-[#EC673D] focus:ring-[#EC673D] mt-1">
                            <span class="ml-3 text-sm text-gray-300">J'accepte de recevoir des propositions commerciales et des offres promotionnelles de la part de Brain Nova par e-mail. <span class="text-[#EC673D]">*</span></span>
                        </label>
                        <label class="flex items-start">
                            <input type="checkbox" name="accepts_policy" value="1" required class="h-4 w-4 rounded border-gray-300 text-[#EC673D] focus:ring-[#EC673D] mt-1">
                            <span class="ml-3 text-sm text-gray-300">Je reconnais avoir lu et j'accepte que mes données soient enregistrées et utilisées conformément à la <a href="/politique-de-confidentialite" target="_blank" class="text-[#316FB5] hover:underline font-semibold">politique de confidentialité</a> de Brain Nova. <span class="text-[#EC673D]">*</span></span>
                        </label>
                    </div>
                </fieldset>

                <div class="pt-5">
                    <div class="flex justify-center">
                        <button type="submit" class="w-full sm:w-auto  shadow-sm shadow-[#FDC416]  border-[#FDC416] text-[#FDC416] font-bold py-3 px-5 rounded-full hover:border-1 hover:border-[#FDC416] transition-all focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#FDC416]">
                            Envoyer ma demande de devis
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection