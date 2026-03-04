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
/*
document.addEventListener("DOMContentLoaded", function () {

  const track = document.querySelector(".carousel-track");
  const prevBtn = document.querySelector(".prev");
  const nextBtn = document.querySelector(".next");
  const container = document.querySelector(".carousel-track-container");
  const images = document.querySelectorAll(".carousel-track img");

  // Sécurité : si le carousel n'existe pas sur la page
  if (!track || !prevBtn || !nextBtn || !container || images.length === 0) {
    return;
  }

  let index = 0;

  function imagesPerView() {
    return window.innerWidth <= 768 ? 1 : 3;
  }

  function updateCarousel() {
  const visible = imagesPerView();
  const itemWidth = container.clientWidth / visible;
  const maxTranslate =
    (images.length * itemWidth) - container.clientWidth;

  let translateX = index * itemWidth;

  // Empêche l'espace vide à la fin
  if (translateX > maxTranslate) {
    translateX = maxTranslate;
  }

  track.style.transform = `translateX(-${translateX}px)`;
}

  nextBtn.addEventListener("click", () => {
  if (index < images.length - imagesPerView()) {
    index++;
  } else {
    index = 0; // retour au début
  }
  updateCarousel();
});

prevBtn.addEventListener("click", () => {
  if (index > 0) {
    index--;
  } else {
    index = images.length - imagesPerView(); // aller à la fin
  }
  updateCarousel();
});

  window.addEventListener("resize", updateCarousel);
  updateCarousel();

});*/
let currentSlide = 0;

function showSlide(index) {
    const slides = document.querySelectorAll('.carousel-item');
    const totalSlides = slides.length;
    const slidesPerView = 3; // Nombre d'éléments visibles en même temps

    if (index >= totalSlides / slidesPerView) {
        currentSlide = 0;
    } else if (index < 0) {
        currentSlide = Math.ceil(totalSlides / slidesPerView) - 1;
    } else {
        currentSlide = index;
    }

    const offset = -currentSlide * 100;
    document.querySelector('.carousel').style.transform = `translateX(${offset}%)`;
}

function nextSlide() {
    showSlide(currentSlide + 1);
}

function prevSlide() {
    showSlide(currentSlide - 1);
}