let currentIndex = 0;
const events = document.querySelectorAll('.manifestation');
const totalEvents = events.length;

// 3 éléments visibles à la fois
const itemsPerPage = 3;

// Nombre total de "pages"
const totalPages = Math.ceil(totalEvents-2);


function updateCarousel() {
    const offset = -currentIndex * (100 / itemsPerPage);
    const carousel = document.getElementById('listeActualite');
    carousel.style.transform = `translateX(${offset}%)`;

    document.getElementById('prevBtn').disabled = currentIndex === 0;
    document.getElementById('nextBtn').disabled = currentIndex >= totalPages - 1;
}

function moveCarousel(direction) {
    currentIndex += direction;

    if (currentIndex < 0) currentIndex = 0;
    if (currentIndex >= totalPages) currentIndex = totalPages - 1;

    updateCarousel();
}

updateCarousel();
