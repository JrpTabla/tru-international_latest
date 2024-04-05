AOS.init();

AOS.init({

    once: true

});



var swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
    },

    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    initialSlide: 1,
    spaceBetween: -477,
});


function toggleFAQ() {
    var hiddenElements = document.querySelectorAll('.faq-hidden');
    var showMoreButton = document.querySelector('.ct-sixth-section-show-more');

    hiddenElements.forEach(function(element) {
        if (element.style.display === 'none') {
            element.style.display = 'block';
            showMoreButton.textContent = 'Show less';
        } else {
            element.style.display = 'none';
            showMoreButton.textContent = 'Show more';
        }
    });
}

const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
popoverTriggerList.forEach(popoverTriggerEl => {
    const popover = new bootstrap.Popover(popoverTriggerEl);

    popoverTriggerEl.addEventListener('mouseleave', function () {
        popover.hide();
    });
});



document.addEventListener('aos:in:super-duper', ({ detail }) => {
    const circleBlue = document.querySelector('.circle-blue path');
    const circleGreen = document.querySelector('.circle-green path');
    const circleYellow = document.querySelector('.circle-yellow path');

    circleBlue.style.animation = 'blue-draw 2s linear forwards ';
    circleYellow.style.animation = 'yellow-draw 2s linear forwards 0.7s';
    circleGreen.style.animation = 'green-draw 2s linear forwards 1s';
});

