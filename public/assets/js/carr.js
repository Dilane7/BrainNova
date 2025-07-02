

    document.addEventListener('DOMContentLoaded', function () {
        
       const swiper = new Swiper('.realisations-carousel', {
        // Options du carrousel
        loop: true, // Permet de boucler à l'infini
        
        // Effet de transition. 'fade' est très élégant. 'slide' est l'option par défaut.
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        },
        
        // Autoplay (optionnel, mais sympa)
        autoplay: {
            delay: 5000, // 5 secondes entre chaque slide
            disableOnInteraction: false, // L'autoplay redémarre même après une navigation manuelle
        },

        // Navigation avec les flèches
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // Pagination avec les points
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        
        // Vitesse de transition en ms
        speed: 800,
    });
        const testimonialsSingleSwiper = new Swiper('.testimonials-carousel-single', {
            slidesPerView: 1,
            spaceBetween: 30, // Espace pour s'assurer qu'il n'y a pas de chevauchement
            loop: true,
            
            // On centre la slide active
            centeredSlides: true,

            // Effet de transition
            effect: 'fade',
            fadeEffect: {
                crossFade: true // Empêche les "sauts" de contenu lors de la transition
            },

            autoplay: {
                delay: 7000, // On laisse encore plus de temps pour la lecture
                disableOnInteraction: false,
            },

            // Navigation avec les flèches personnalisées
            navigation: {
                nextEl: '.swiper-button-next-single',
                prevEl: '.swiper-button-prev-single',
            },

            // Pagination avec les points
            pagination: {
                el: '.swiper-pagination-single',
                clickable: true,
            },

            speed: 600,
        });
    
       
    });