// For item carousel

let currentIndex = 0;

function moveCarousel(direction) {
    const items = document.querySelectorAll('.carousel-item');
    const totalItems = items.length;
    const itemsToShow = 3;
    currentIndex += direction;
    if (currentIndex < 0) {
        currentIndex = totalItems - itemsToShow;
    } else if (currentIndex > totalItems - itemsToShow) {
        currentIndex = 0;
    }
    const carousel = document.getElementById('carousel');
    carousel.style.transform = `translateX(-${(100 / itemsToShow) * currentIndex}%)`;
}