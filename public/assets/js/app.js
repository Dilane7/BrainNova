        // On sélectionne le bouton et le menu par leur ID
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileMenuLinks = mobileMenu.querySelectorAll('a');

        // On ajoute un écouteur d'événement sur le bouton
        mobileMenuButton.addEventListener('click', () => {
            // A chaque clic, on alterne la classe 'hidden' sur le menu
            mobileMenu.classList.toggle('hidden');
        });

        // (Optionnel mais recommandé) Fermer le menu quand on clique sur un lien
        mobileMenuLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
            });
        });

        
    