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


    AOS.init({

      once: true

    });

  }, 3000); // Adjust the delay as needed


  var bodyElement = document.querySelector('body');
  bodyElement.style.display = 'block';

 
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
  const secondSectionDescriptions = document.querySelectorAll('.second-section-description');
  var scrollPosition = window.scrollY;

  sections.forEach(function(section) {
    var sectionTop = section.offsetTop;
    var sectionHeight = section.offsetHeight;
    var triggerPoint = sectionTop - (sectionHeight * 0.25); 
    // var triggerPoint = sectionTop; 
  
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
          secondSectionDescriptions.forEach(function(description) {
            description.style.color = "#fff"; // Change text color to #131313 for all descriptions
          });
        break;
        case 'second-section':
          // Start the counter when scroll position is in the second-section
          mainElement.style.background = "#131313";
          secondSectionDescriptions.forEach(function(description) {
            description.style.color = "#fff"; // Change text color to #131313 for all descriptions
          });
        break;
        case 'third-section':
          // Start the counter when scroll position is in the third-section
          // counter();
          mainElement.style.background = "#9AD9FF";
          secondSectionDescriptions.forEach(function(description) {
            description.style.color = "#131313"; // Change text color to #131313 for all descriptions
          });
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


const container = document.querySelector('.eigth-section-scroll-section');
const Eigth_button = document.querySelector('.eigth-section-fourth-content-button');

document.addEventListener('mousemove', (e) => {
  let x = e.clientX;
  let y = e.clientY;

  Eigth_button.style.top = y + "px";
  Eigth_button.style.left = x + "px";
});

container.addEventListener('mouseenter', () => {
  Eigth_button.style.display = "block";
});

container.addEventListener('mouseleave', () => {
  Eigth_button.style.display = "none";
});

const textElements = document.getElementsByClassName("landing-section-random-text");
const texts = ['undeceivable', 'decisive', 'foolproof', 'smart', 'guarded'];
let index = 0;

function typeText(element, text, index, charIndex) {
  if (index >= texts.length) {
    index = 0;
  }
  if (charIndex < text.length) {
      element.textContent += text.charAt(charIndex);
      setTimeout(() => {
        typeText(element, text, index, charIndex + 1);
      }, 100);
  } else {
      setTimeout(() => {
        eraseText(element, text, index, charIndex);
      }, 1000);
  }
}

function eraseText(element, text, index, charIndex) {
  if (charIndex >= 0) {
    element.textContent = text.substring(0, charIndex); 
    setTimeout(() => {
      eraseText(element, text, index, charIndex - 1);
    }, 100);
  } else {
    setTimeout(() => {
      typeNextText(element, index);
    }, 500);
  }
}

function typeNextText(element, index) {
  element.textContent = '';
  index = (index + 1) % texts.length;
  typeText(element, texts[index], index, 0);
}

typeText(textElements[0], texts[index], index, 0);

function Be_a_Communitrade() {
  window.location.href = "/communitrade";
}

function Be_a_TRU() {
  window.location.href = "/register";
}

function Go_to_Blog() {
  window.location.href = "https://blog.tradersunited.org/";
}


var currentImageIndex = 1; // Initial index of the image

// Function to shift to the next image
function shiftToNextImage() {
    var nextImageIndex = currentImageIndex % 6 + 1; // Calculate the next image index (1 to 6)
    var nextImageElement = document.querySelector('.image-' + nextImageIndex); // Select the next image element
    imageClickHandler(nextImageElement); // Call the imageClickHandler function with the next image element
    currentImageIndex = nextImageIndex; // Update the current image index
}

// Function to handle image click
function imageClickHandler(element) {
  var profileImage = document.getElementById('profile-image');
  profileImage.src = element.src;

  // Example of changing other content
  switch (currentImageIndex) {
    case 1:
      document.querySelector('.fifth-section-second-content-username').innerText = "@Bakari Ali";
      document.querySelector('.fifth-section-second-content-platform').innerText = "Comment in Discussion Board";
      document.querySelector('.fifth-section-second-content-comments').innerText = "Locked in some solid gains on my GBP/JPY trade today! 📈💰 The market's movements are keeping me on my toes, but that's where the opportunities lie!";
    break;
    case 2:
      document.querySelector('.fifth-section-second-content-username').innerText = "@Prudencio Villanueva";
      document.querySelector('.fifth-section-second-content-platform').innerText = "Comment in Discussion Board";
      document.querySelector('.fifth-section-second-content-comments').innerText = "Trading in stocks is fairly new to me, but it’s not that far off from crypto trading so I’m not gonna have to make big adjustments.";
    break;
    case 3:
      document.querySelector('.fifth-section-second-content-username').innerText = "@Maya Utami";
      document.querySelector('.fifth-section-second-content-platform').innerText = "Comment in Discussion Board";
      document.querySelector('.fifth-section-second-content-comments').innerText = "I’m trying to diversify my portfolio as suggested by my account manager, so this post is really helpful to me!";
    break;
    case 4:
      document.querySelector('.fifth-section-second-content-username').innerText = "@Cristina Nuñez";
      document.querySelector('.fifth-section-second-content-platform').innerText = "Comment in Community Forum";
      document.querySelector('.fifth-section-second-content-comments').innerText = "Added some SOL on my portfolio today. Might as well jump into the crypto craze.";
    break;
    case 5:
      document.querySelector('.fifth-section-second-content-username').innerText = "@Shahid Patel";
      document.querySelector('.fifth-section-second-content-platform').innerText = "Comment in Community Forum";
      document.querySelector('.fifth-section-second-content-comments').innerText = "I think you set your SL too tight. Try setting them a few more levels below the current position 😊";
    break;
    case 6:
      document.querySelector('.fifth-section-second-content-username').innerText = "@Ranjeet Kapoor";
      document.querySelector('.fifth-section-second-content-platform').innerText = "comment in Forex Space";
      document.querySelector('.fifth-section-second-content-comments').innerText = "Wow, just closed my GBP/USD trade with a killer profit! 💰💹 Loving the volatility today!";
    break;
    
    default:
    break;
  }
}

// Initial call to start the shifting after 3 seconds
setInterval(shiftToNextImage, 3000);