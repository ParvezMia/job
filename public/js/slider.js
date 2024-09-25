// JavaScript for slider functionality
const testimonials = document.querySelector(".testimonial-wrapper");
const testimonialSlides = document.querySelectorAll(".testimonial-slide");
let currentIndex = 0;

const nextButton = document.getElementById("next-slide");
const prevButton = document.getElementById("prev-slide");

// Automatically slide every 3 seconds
setInterval(() => {
    currentIndex = (currentIndex + 1) % testimonialSlides.length;
    updateSlide();
}, 4000);

// Manual slide controls
nextButton.addEventListener("click", () => {
    currentIndex = (currentIndex + 1) % testimonialSlides.length;
    updateSlide();
});

prevButton.addEventListener("click", () => {
    currentIndex =
        (currentIndex - 1 + testimonialSlides.length) %
        testimonialSlides.length;
    updateSlide();
});

function updateSlide() {
    const slideWidth = testimonialSlides[0].clientWidth;
    testimonials.style.transform = `translateX(-${
        currentIndex * slideWidth
    }px)`;
}
