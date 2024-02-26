var countingStarted = false; // Flag to track whether counting has started
/* Second-section counting upto the value of setData */


window.addEventListener("load", function() {

  setTimeout(function() {
    var typed = new Typed('.preloader-content-text', {
        strings: ["<span>Traders</span> Un<span class='i'>i</span>ted"],
        typeSpeed: 60
    });
  }, 1000); // Delay in milliseconds (1 second = 1000 milliseconds)

  setTimeout(() => {
    animateSlideUp(); // Trigger slide-up animation
    mainElement.style.display = 'block';
    AOS.init();

  }, 3000); // Adjust the delay as needed

 
  ScrollReveal().reveal('.navbar', {
    origin: 'top',   // Slide in from the top
    distance: '100px', // Slide distance
    duration: 2000, // Animation duration in milliseconds
    easing: 'ease-out', // Easing function
    delay: 3000, // Delay before the animation starts in milliseconds
    opacity: 0, // starting opacity
    // reset: true // Specifies whether to re-run the animation on element again when scrolling up
  });

  // Initialize ScrollReveal
  ScrollReveal().reveal('.preloader-content', {
    duration: 1000, // how long the reveal animation takes in milliseconds
    origin: 'bottom', // the origin of the animation
    distance: '50px', // distance from the origin
    easing: 'cubic-bezier(0.5, 0, 0, 1)', // easing function to use
    scale: 0.5, // scale of the revealed item
    opacity: 0, // starting opacity
    // reset: true // reset the animation after it's been seen
    // Other properties can be added for more effects like rotate, slide, etc.
  });


  window.addEventListener('scroll', changeBackgroundColor);


});


var mainElement = document.querySelector('.main');

// Function to animate slide-up
function animateSlideUp() {

  preloader.classList.add('slide-up'); // Add the slide-up class

}

var sections = document.querySelectorAll('section');

function changeBackgroundColor() {
  var mainElement = document.querySelector('.main');
  var scrollPosition = window.scrollY;

  sections.forEach(function(section) {
    var sectionTop = section.offsetTop;
    var sectionHeight = section.offsetHeight;
    var triggerPoint = sectionTop - (sectionHeight * 0.70); // Adjusted trigger point
  
    if (scrollPosition >= triggerPoint && scrollPosition < sectionTop + sectionHeight) {
        var sectionId = section.id;

      switch (sectionId) {
        case 'landing-section':
          // Start the counter when scroll position is in the landing-section
          if (!countingStarted) { // Check if counting has not started yet
            counter(); // Start counting
            countingStarted = true; // Set the flag to true
          }
          mainElement.style.background = "#131313";
        break;
        case 'second-section':
          // Start the counter when scroll position is in the second-section
          mainElement.style.background = "#131313";
        break;
        case 'third-section':
          // Start the counter when scroll position is in the third-section
          // counter();
          mainElement.style.background = "#9AD9FF";
        break;
        case 'fourth-section':
          // Start the counter when scroll position is in the fourth-section
          // counter();
          
          mainElement.style.background = "#FFCA5D";
        break;
        case 'fifth-section':
          // Start the counter when scroll position is in the fifth-section
          // counter();
          mainElement.style.background = "#fff";
        break;
        case 'sixth-section':
          // Start the counter when scroll position is in the sixth-section
          // counter();
          mainElement.style.background = "#8ECB86";
        break;
        case 'seventh-section':
          // Start the counter when scroll position is in the seventh-section
          // counter();
          mainElement.style.background = "#E6E7E7";
        break;
        case 'eigth-section':
          // Start the counter when scroll position is in the eigth-section
          // counter();
          mainElement.style.background = "#131313";
        break;
      }
    } else {
      section.style.backgroundColor = ''; // Reset to default color when not in view
    }
  });
}


function counter() {

  const counters = document.querySelectorAll(".second-section-title");

  counters.forEach(counter => {
    // console.log(counter);

    let initial_count = 0;
    const final_count = counter.dataset.count;
    // console.log(final_count);

    const counting = setInterval(updateCounting, 1);


    function updateCounting() {

      if (initial_count < 1000) {
        initial_count += 1;
        counter.innerText = initial_count
      }

      if (initial_count >= 1000) {
        initial_count += 100;
        counter.innerText = (initial_count / 1000).toFixed(0) + 'k+'
      }

      if (initial_count >= 10000) {
        initial_count += 10000;
        counter.innerText = (initial_count / 1000).toFixed(0) + 'k+'
      }

      if (initial_count >= 1000000) {
        initial_count += 500000;
        counter.innerText = (initial_count / 1000000).toFixed(0) + 'M+'
      }

      if (initial_count >= final_count) {
        clearInterval(counting);
      }
    }

  })
}
