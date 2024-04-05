

<?php $__env->startSection('content'); ?>

<link rel="stylesheet" href="<?php echo e(asset ('assets/css/user/dashboard.css')); ?>">


<div class="main">
        <div class="Page-header">
            <div class="Page-title">Dashboard</div>

            <div class="Page-Nav row mt-auto">

                <div class="col-4">
                        <div class="Page-link Page-Membership" onclick="togglePage('Membership')">Membership</div>
                </div>

                <div class="col-4">
                        <div class="Page-link Page-Activity" onclick="togglePage('Activity')">Activity</div>
                </div>
                <div class="col-4">
                        <div class="Page-link Page-Affiliate" onclick="togglePage('Affiliate')">Affiliate Program</div>
                </div>
            </div>
        </div>

        <div class="Page-Body m-auto">
                <div class="Page-Membership-body">
                    <div class="row">
                        <div class="Page-Membership-email-div col-12">
                            <div>Your account is not yet verified. Verify your account now to maximize your TRU membership benefits. <a onclick="VerifyEmail()">Click here to proceed with verification.</a></div>
                        </div>
                        <div class="Page-Membership-body-img-div col-3 d-flex">
                            <div class="Page-Membership-body-img-container m-auto">
                                <img src="" alt="">
                            </div>
                        </div>
                        <div class="Page-Membership-body-info-div col-8">
                            <div class="user-name-profile"></div>
                            <div class="d-flex">
                                <div class="user-info-description">TRU Member ID: </div>
                                <div class="user-id-profile"></div>
                            </div>
                            
                            <div class="d-flex">
                                <div class="user-info-description">Membership Type: </div>
                                <div class="user-verification-profile"></div>
                                <div class="user-tag-profile-green">PRIME</div>
                            </div>
                            <div class="d-flex">
                                <div class="user-info-description">Membership Term: </div>
                                <div class="user-term-profile">January 1, 2024 - January 31, 2024</div>
                            </div>
                            <div class="d-flex">
                                <div class="user-info-description">Country: </div>
                                <div class="user-country-profile"></div>
                            </div>

                            <div class="d-flex">
                                <div class="user-info-description">Milestones: </div>
                                <div class="user-tag-profile-green">PROFESSIONAL</div>
                                <div class="user-tag-profile-orange">TRADE MASTER</div>
                            </div>
                        </div>
                    </div>
                </div>  

                <div class="Page-Activity-body">
                Activity Body Content
                </div>
                <div class="Page-Affiliate-body">
                Affiliate Body Content
                </div>
        </div>
</div>

<script>
    function togglePage(pageName) {
        // Toggle active class for Page-link
        const pageLinks = document.querySelectorAll('.Page-link');
        pageLinks.forEach(link => {
            link.classList.remove('active-page-link');
        });
        document.querySelector('.Page-' + pageName).classList.add('active-page-link');

        // Toggle display for Page-body
        const pageBodies = document.querySelectorAll('.Page-Body > div');
        pageBodies.forEach(body => {
            body.style.display = 'none';
        });
        document.querySelector('.Page-' + pageName + '-body').style.display = 'block';
    }

    // Default to Membership page
    window.onload = function() {
        togglePage('Membership');
    };


    function createCards(pointsArray, titlesArray, buttonsArray, imagesArray) {
        // Get the container element where the cards will be appended
        var rowContainer = document.querySelector('.Page-Membership-body .row');

        // Loop through the arrays
        for (var i = 0; i < pointsArray.length; i++) {
            // Create a new col-3 div element
            var colDiv = document.createElement('div');
            colDiv.className = 'col-6 user-card-profile';

            // Create the content for the card
            var cardContent = document.createElement('div');
            cardContent.className = 'user-card-content';

            // Create the image element
            var imgElement = document.createElement('img');
            imgElement.src = imagesArray[i];
            imgElement.alt = titlesArray[i]; // You can set the alt attribute to the title or any other relevant information

            // Create the points element
            var pointsElement = document.createElement('div');
            pointsElement.className = 'user-card-points';
            pointsElement.textContent = pointsArray[i];

            // Create the title element
            var titleElement = document.createElement('div');
            titleElement.className = 'user-card-title';
            titleElement.textContent = titlesArray[i];

            // Create the button element
            var buttonElement = document.createElement('button');
            buttonElement.className = 'btn user-card-btn';
            buttonElement.textContent = buttonsArray[i];
            if (pointsArray[i] <= 0) {
                buttonElement.classList.add('unabled');
            } else {
                buttonElement.classList.add('abled');
            }

            // Append the image, points, title, and button to the card content
            cardContent.appendChild(imgElement);
            cardContent.appendChild(pointsElement);
            cardContent.appendChild(titleElement);
            cardContent.appendChild(buttonElement);

            // Append the card content to the col-3 div
            colDiv.appendChild(cardContent);

            // Append the col-3 div to the row container
            rowContainer.appendChild(colDiv);
        }
    }

// Example usage:
var pointsArray = [300, 0, 2, 0];
var titlesArray = ['TRU Points', 'Active Disputes', 'Pending Ratings', 'UnityGains'];
var buttonsArray = ['Claim Rewards', 'File a Case', 'Rate Now', 'Maximize Gain'];
var imagesArray = [
    '',
    '<?php echo e(asset ('assets/images/user/Dashboard-membership/Briefcase.png')); ?>',
    '<?php echo e(asset ('assets/images/user/Dashboard-membership/Danger.png')); ?>',
    '<?php echo e(asset ('assets/images/user/Dashboard-membership/Unity.png')); ?>'
];

createCards(pointsArray, titlesArray, buttonsArray, imagesArray);


function get_user_info_dashboard() {
    // Send an AJAX request to the server
    fetch('/get_user_info', {
        method: 'GET',
        headers: {
            'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'
        }
    })
    .then(response => {
        // Check if the response is successful
        if (response.ok) {
            return response.json(); // Extract the response body as JSON
        }
        throw new Error('Network response was not ok.');
    })
    .then(data => {

        // Update the content of the user-name div with the first name and last name
        document.querySelector('.user-name-profile').innerText = data.firstName + ' ' + data.lastName;

        // Update the content of the user-name div with the first name and last name
        document.querySelector('.user-id-profile').innerText = data.userId;
        

        document.querySelector('.user-country-profile').innerText = data.country;

        document.querySelector('.user-prime').classList.add('primed');
        document.querySelector('.user-prime').innerText = 'Prime';

        // Check if email is verified
        if (data.emailVerifiedAt == 0) {
            // If email is not verified
            document.querySelector('.user-verification-profile').classList.add('user-unverified');
            document.querySelector('.user-verification-profile').innerText = 'Unverified';


            // If email is not verified, show the email verification message
            document.querySelector('.Page-Membership-email-div').classList.add('show-email-div');
        } else {
            // If email is verified
            document.querySelector('.user-verification-profile').classList.add('user-verified');
            document.querySelector('.user-verification-profile').innerText = 'Verified';
        }
         // Update the content of the user-name div with the first name and last name
         document.querySelector('.user-membership').innerText = "TRU Member";
    })

    .catch(error => {
        console.error('Error:', error);
    });
}

get_user_info_dashboard();


</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('header.user_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Admin-IT\Desktop\tru-international\tru-international_latest\resources\views/pages/user/dashboard.blade.php ENDPATH**/ ?>