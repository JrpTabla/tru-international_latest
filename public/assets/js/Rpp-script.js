
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
/* pagination: {
    el: ".swiper-pagination",
    }, */
// Add navigation buttons
navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
},
// Set initial slide index to the last one
initialSlide: 1,
spaceBetween: -477, // Adjust this value to decrease/increase the gap between slides
});


window.addEventListener("load", function() {
    // var mainElement = document.querySelector('.main');
  
    // setTimeout(() => {
    //   animateSlideUp(); // Trigger slide-up animation
    //   mainElement.style.display = 'block';

  
    // }); // Adjust the delay as needed
  

    AOS.init();
  
  });

