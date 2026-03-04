function filterCards(year) {
    let cards = document.querySelectorAll('.card');
    let buttons = document.querySelectorAll('.filter-btn');

    // Mettre à jour l'état des cartes
    cards.forEach(card => {
        if (year === 'all') {
            card.classList.remove('hidden');
        } else {
            let cardYear = card.getAttribute('data-year');
            card.classList.toggle('hidden', cardYear !== year);
        }
    });

    // Mettre à jour le style du bouton actif
    buttons.forEach(button => {
        button.classList.toggle('active', button.getAttribute('data-filter') === year);
    });
}

/*Fonction animation du texte */
document.addEventListener('DOMContentLoaded', function() {
    const elements = document.querySelectorAll('.fade-in, .slide-in-right, .slide-in-bottom');

    function checkVisibility() {
        elements.forEach(element => {
            const rect = element.getBoundingClientRect();
            if (rect.top < window.innerHeight && rect.bottom > 0) {
                element.classList.add('visible');
            }
        });
    }

    window.addEventListener('scroll', checkVisibility);
    checkVisibility(); // Vérifiez la visibilité au chargement de la page
});
/* Fonction scroll pour les liens */
document.addEventListener('DOMContentLoaded', function() {
    const scrollLinks = document.querySelectorAll('.scroll-link');

    scrollLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);

            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop,
                    behavior: 'smooth'
                });
            }
        });
    });
});

let currentSlide = 0;

function showSlide(index) {
    const carousel = document.querySelector('.carousel');
    const slides = document.querySelectorAll('.carousel-item');
    const totalSlides = slides.length;

    // 1 image visible
    const slidesPerView = 1;
    const maxIndex = totalSlides - slidesPerView;

    if (index > maxIndex) {
        currentSlide = 0;
    } else if (index < 0) {
        currentSlide = maxIndex;
    } else {
        currentSlide = index;
    }

    const slideWidth = slides[0].offsetWidth;
    const offset = -currentSlide * slideWidth;

    carousel.style.transform = `translateX(${offset}px)`;
}

function nextSlide() {
    showSlide(currentSlide + 1);
}

function prevSlide() {
    showSlide(currentSlide - 1);
}

window.addEventListener('resize', () => {
    showSlide(currentSlide);
});