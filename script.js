const slides = document.querySelector('.slides');
const images = document.querySelectorAll('.slides img');
const prevBtn = document.querySelector('.prev');
const nextBtn = document.querySelector('.next');
const dots = document.querySelectorAll('.dot');
let currentIndex = 0;
const totalSlides = images.length;

function updateSlider() {
    slides.style.transform = 'translateX(' + (-currentIndex * 100) + '%)';
    dots.forEach((dot, i) => {
        dot.classList.toggle('active', i === currentIndex);
    });
}
function showNext() {
    currentIndex = (currentIndex + 1) % totalSlides;
    updateSlider();
}
function showPrev() {
    currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
    updateSlider();
}

prevBtn.addEventListener('click', showPrev);
nextBtn.addEventListener('click', showNext);
dots.forEach((dot, index) => {
    dot.addEventListener('click', () => {
        currentIndex = index;
        updateSlider();
    });
});

let autoSlide = setInterval(showNext, 5000);
document.querySelector('.slider').addEventListener('mouseenter', () => {
    clearInterval(autoSlide);
});
document.querySelector('.slider').addEventListener('mouseleave', () => {
    autoSlide = setInterval(showNext, 5000);
});
updateSlider();