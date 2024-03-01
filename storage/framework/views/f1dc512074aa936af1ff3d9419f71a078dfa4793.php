<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($title); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset ('assets/css/bootstrap.css')); ?>">

    <link rel="shortcut icon" href="<?php echo e(asset ('assets/images/favicon.ico')); ?>" type="image/x-icon"/>

    
    <link rel="stylesheet" href="<?php echo e(asset ('assets/css/admin/admin_header.css')); ?>">



    

</head>
<body>
    
<div class="side-navbar">
    <div class="side-navbar-img-div">
        <img src="<?php echo e(asset ('assets/images/user/user_nav/logo.png')); ?>" alt="" srcset="">
    </div>

    <div class="side-navbar-nav-link-div">
        
        <a class="side-navbar-nav-link" href="/admin__dashboard">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="18" viewBox="0 0 16 18" fill="none" class="side-nav-svg my-auto">
                <path d="M0 18V6L8 0L16 6V18H10V11H6V18H0Z"/>
            </svg>
            <div class="side-navbar-nav-link-text-div d-flex">
                <div class="side-navbar-nav-link-text my-auto">
                    Dashboard
                </div>
            </div>
        </a>

        <a class="side-navbar-nav-link" href="/admin__blog">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="18" viewBox="0 0 16 18" fill="none" class="side-nav-svg my-auto">
                <path d="M0 18V6L8 0L16 6V18H10V11H6V18H0Z"/>
            </svg>
            <div class="side-navbar-nav-link-text-div d-flex">
                <div class="side-navbar-nav-link-text my-auto">
                    Blog
                </div>
            </div>
        </a>
        
    </div>
</div>

    
<?php echo $__env->yieldContent('content'); ?>
    

<script>

// get_user_info();

// Function to highlight the selected list item based on the current page
function highlightCurrentPage() {
    // Get the current page URL or identifier
    var currentPage = window.location.pathname; // You may need to customize this based on your routing logic

    // Remove any existing 'active-sidenav-link' class
    var sidenavLinks = document.querySelectorAll('.side-navbar-nav-link-div a');
    sidenavLinks.forEach(function(link) {
        link.classList.remove('active-side-nav-link');
    });

    // Add 'active-sidenav-link' class to the corresponding link based on the current page
    sidenavLinks.forEach(function(link) {
        if (link.getAttribute('href') === currentPage) {
            link.classList.add('active-side-nav-link');
        }
    });
}

// // Call the function when the page loads
window.addEventListener('load', highlightCurrentPage);



// function logout() {
//     // Send an AJAX request to the server

//     fetch('/logout', {
//         method: 'POST',
//         headers: {
//             'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'
//         }
//     })
//     .then(response => {
//         // if (response.ok) {
//         //     // Handle successful logout
//         //     console.log('Logout successful');
//         // } else {
//         //     // Handle errors
//         //     console.error('Logout failed');
//         // }
//     })
//     .catch(error => {
//         console.error('Error:', error);
//     });
    
// }

// function get_user_info() {
//     // Send an AJAX request to the server
//     fetch('/get_user_info', {
//         method: 'GET',
//         headers: {
//             'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'
//         }
//     })
//     .then(response => {
//         // Check if the response is successful
//         if (response.ok) {
//             return response.json(); // Extract the response body as JSON
//         }
//         throw new Error('Network response was not ok.');
//     })
//     .then(data => {

//         // Update the content of the user-name div with the first name and last name
//         document.querySelector('.user-name').innerText = data.firstName + ' ' + data.lastName;

//         // Update the content of the user-name div with the first name and last name
//         document.querySelector('.user-id').innerText = "Member ID:" + ' ' + data.userId;

//         document.querySelector('.user-prime').classList.add('primed');
//         document.querySelector('.user-prime').innerText = 'Prime';

//         console.log(data.emailVerifiedAt);

//         // Check if email is verified
//         if (data.emailVerifiedAt == '-000001-11-30T00:00:00.000000Z') {
//             // If email is not verified
//             document.querySelector('.user-verification').classList.add('unverified');
//             document.querySelector('.user-verification').innerText = 'Unverified';
//         } else {
//             // If email is verified
//             document.querySelector('.user-verification').classList.add('verified');
//             document.querySelector('.user-verification').innerText = 'Verified';
//         }
//          // Update the content of the user-name div with the first name and last name
//          document.querySelector('.user-membership').innerText = "TRU Member";
//     })

//     .catch(error => {
//         console.error('Error:', error);
//     });


// }

</script>

</body>

</html><?php /**PATH C:\Users\Admin-IT\Desktop\tru-international\tru-international_latest\resources\views/header/admin_header.blade.php ENDPATH**/ ?>