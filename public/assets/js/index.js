

function AnimationChangeColor() {
  gsap.registerPlugin(ScrollTrigger);


  const sections = document.querySelectorAll('section');

  sections.forEach((section, index) => {
    const originalColor = section.dataset.color || '#131313'; // Default color is white

    gsap.to('.main', {
      scrollTrigger: {
        trigger: section,
        start: 'start 95%',
        end: 'end 95%',
        scrub: true,
        onEnter: () => {
          // Restore original color when entering the section
          gsap.to('.main', { backgroundColor: originalColor, ease: '#131313' });
        },
        onLeaveBack: () => {
          // Change the color back to the original color when leaving the section in reverse scroll
          gsap.to('.main', { backgroundColor: originalColor, ease: '#131313' });
        },
      },
      backgroundColor: originalColor,
      ease: '#fff',
    });
  });
}



AnimationChangeColor();

counter();








// /* Change Section Color when scrolled */
// document.addEventListener('DOMContentLoaded', function() {

//     var sections = document.querySelectorAll('section');

//     function changeBackgroundColor() {
//         var scrollPosition = window.scrollY;

//         sections.forEach(function(section) {
//         var sectionTop = section.offsetTop;
//         var sectionHeight = section.offsetHeight;
//         var triggerPoint = sectionTop - (sectionHeight * 0.50); // Adjusted trigger point

//         if (scrollPosition >= triggerPoint && scrollPosition < sectionTop + sectionHeight) {
//             var sectionId = section.id;

//             switch (sectionId) {
//                 case 'landing-section':
//                   // Start the counter when scroll position is in the second-section
//                   counter();
//                 break;

//             }

//         } else {
//             section.style.backgroundColor = '#131313'; // Reset to default color when not in view
//         }
//         });
//     }

//     window.addEventListener('scroll', changeBackgroundColor);


// });


/* Second-section counting upto the value of setData */
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