import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap';
import './styles/app.css';


/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)


import './styles/app.css';

// On attend que la page soit complètement chargée
document.addEventListener('DOMContentLoaded', function () {
    // On sélectionne tous les liens du menu
    const menuLinks = document.querySelectorAll('.navbar-nav .nav-link');

    // On applique un événement au clic sur chaque lien
    menuLinks.forEach(function(link) {
        link.addEventListener('click', function() {
            // Animation au clic
            this.style.transform = 'scale(1.1)';
            setTimeout(() => {
                this.style.transform = 'scale(1)';
            }, 200);
        });
    });
});
